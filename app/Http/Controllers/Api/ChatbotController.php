<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ChatbotController extends Controller
{
    public function reply(Request $request)
    {
        // 1. التحقق من وجود الـ API Key (المتطلب الأكاديمي)
        $apiKey = env('CHATBOT_API_KEY');
        if (!$apiKey) {
            return response()->json(['reply' => 'خطأ: الـ API Key غير موجود!'], 401);
        }

        $message = $request->input('message');

        // 2. جلب المنتجات لو المستخدم طلبها
        if (str_contains($message, 'منتجات') || str_contains($message, 'اسعار')) {
            $products = Product::all();
            return response()->json([
                'reply' => 'إليك قائمة المنتجات والأسعار المتوفرة لدينا:',
                'data' => $products
            ]);
        }

        return response()->json([
            'reply' => 'أهلاً بكِ! يمكنك سؤالي عن "المنتجات".'
        ]);
    }
}