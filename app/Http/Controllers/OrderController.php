<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::all();

        return response()->json([
            'status' => true,
            'message' => 'Orders fetched successfully',
            'data' => $orders
        ], 200);
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            
            'total_price' => 'required|numeric',
        ]);

        $order = Order::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Order created successfully',
            'data' => $order
        ], 201);
    }

    
    public function show($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json([
                'status' => false,
                'message' => 'Order not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Order fetched successfully',
            'data' => $order
        ], 200);
    }

    
    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json([
                'status' => false,
                'message' => 'Order not found'
            ], 404);
        }

        $validated = $request->validate([
            'total_price' => 'required|numeric',
        ]);

        $order->update($validated);

        return response()->json([
            'status' => true,
            'message' => 'Order updated successfully',
            'data' => $order
        ], 200);
    }

    
    public function destroy($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json([
                'status' => false,
                'message' => 'Order not found'
            ], 404);
        }

        $order->delete();

        return response()->json([
            'status' => true,
            'message' => 'Order deleted successfully'
        ], 200);
    }
}