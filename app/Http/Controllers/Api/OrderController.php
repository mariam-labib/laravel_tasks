<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // عرض كل طلبات المستخدم الحالي مع المنتجات بتاعتها
    public function index(Request $request)
    {
        $userId = $request->user() ? $request->user()->id : 1;
        $orders = Order::with('items.product')->where('user_id', $userId)->get();
        return response()->json($orders, 200);
    }

    // إنشاء طلب جديد (Checkout)
    public function store(Request $request)
    {
        $request->validate([
            'items' => 'required|array',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric'
        ]);

        // لو الـ User مش مسجل دخول، بنحط ID مؤقت 1 لتجنب الأخطاء
        $userId = $request->user() ? $request->user()->id : 1;

        // 1. إنشاء الطلب
        $order = Order::create([
            'user_id' => $userId,
            'total_price' => $request->total_price,
            'status' => 'pending'
        ]);

        // 2. إضافة المنتجات الخاصة بالطلب في جدول order_items
        foreach ($request->items as $item) {
            $product = Product::find($item['product_id']);
            
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $product ? $product->price : 0
            ]);
        }

        return response()->json([
            'message' => 'Order created successfully',
            'order' => $order->load('items.product')
        ], 201);
    }
}