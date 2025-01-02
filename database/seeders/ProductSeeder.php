<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->fakeCategories();
        $this->fakeProducts();
        $this->fakeProductImages();
    }

    private function fakeCategories(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Điện thoại di động',
                'sort_order' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Laptop',
                'sort_order' => 2,
            ],
            [
                'id' => 3,
                'name' => 'Máy tính bảng',
                'sort_order' => 3,
            ],
            [
                'id' => 4,
                'name' => 'Phụ kiện',
                'sort_order' => 5,
            ],
            [
                'id' => 6,
                'name' => 'Âm thanh',
                'sort_order' => 6,
            ],
            [
                'id' => 7,
                'name' => 'Đồng hồ',
                'sort_order' => 7,
            ],
            [
                'id' => 8,
                'name' => 'Phần mềm',
                'sort_order' => 8,
            ],
        ]);
    }

    private function fakeProductImages(): void
    {
        DB::table('images')->insert([
            [
                'id' => 1,
                'path' => 'assets/thumb/medium/100/products/66s706a.jpg',
                'size' => fake()->numberBetween(10,100),
            ],
            [
                'id' => 2,
                'path' => 'assets/thumb/medium/100/products/may-tinh-xach-tay-asus-zenbook-ux305f-fc089h-01f474.jpg',
                'size' => fake()->numberBetween(10,100),
            ],
        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'image_id' => 1,
            ],
            [
                'product_id' => 2,
                'image_id' => 2,
            ],
        ]);
    }

    private function fakeProducts(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'category_id' => 1,
                'name' => 'APPLE IPHONE 6S PLUS ROSE GOLD 128GB',
                'price' => 14990000,
                'inventory' => 100,
                'short_description' => 'Apple iPhone 6s Plus là chiếc iPhone màn hình lớn nhất, cho bạn làm được nhiều việc hơn trên không gian rộng lớn. Hơn nữa, những tính năng mới như 3D Touch, Live Photos hay camera 12MP xuất sắc sẽ mang đến sự hài lòng nhất cho bạn khi sử dụng một chiếc smartphone thực sự cao cấp.',
                'description' => '',
            ],
            [
                'id' => 2,
                'category_id' => 2,
                'name' => 'Laptop Asus Zenbook UX305F-FC089H',
                'price' => 18990000,
                'inventory' => 10,
                'short_description' => 'Laptop Asus Zenbook UX305F-FC089H (Intel Core M-5Y10, 8GB RAM, 256GB SSD, 13.3 inch, Win 8.1)',
                'description' => '',
            ],
        ]);
    }
}
