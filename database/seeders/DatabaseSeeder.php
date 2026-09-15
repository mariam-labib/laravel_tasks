<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. قسم اللابتوبات والأجهزة
        $laptops = Category::create(['name' => 'Laptops & Computers']);
        Product::create(['name' => 'Dell XPS 15 Laptop', 'price' => 1500, 'category_id' => $laptops->id]);
        Product::create(['name' => 'MacBook Pro M3', 'price' => 2000, 'category_id' => $laptops->id]);
        Product::create(['name' => 'HP Spectre x360', 'price' => 1300, 'category_id' => $laptops->id]);

        // 2. قسم الموبايلات والإكسسوارات
        $phones = Category::create(['name' => 'Phones & Accessories']);
        Product::create(['name' => 'iPhone 15 Pro', 'price' => 1000, 'category_id' => $phones->id]);
        Product::create(['name' => 'Samsung Galaxy S24 Ultra', 'price' => 1200, 'category_id' => $phones->id]);
        Product::create(['name' => 'AirPods Pro 2', 'price' => 250, 'category_id' => $phones->id]);

        // 3. قسم الإلكترونيات
        $electronics = Category::create(['name' => 'Electronics']);
        Product::create(['name' => 'Logitech Wireless Mouse', 'price' => 50, 'category_id' => $electronics->id]);
        Product::create(['name' => 'Mechanical Gaming Keyboard', 'price' => 90, 'category_id' => $electronics->id]);
        Product::create(['name' => 'Dell 27 Inch Monitor', 'price' => 300, 'category_id' => $electronics->id]);
    }
}