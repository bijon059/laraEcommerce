<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            array(
            'category_id' => '1',
            'brand_id' => '1',
            'title' => 'Samsung Galaxy A10s',
            'description' => 'The Samsung Galaxy A10s runs Android 9 Pie and is powered by a 4000mAh battery. As far as the cameras are concerned, the Samsung Galaxy A10s on the rear packs a 13-megapixel primary camera with an f/1.8 aperture and a second 2-megapixel camera with an f/2.4 aperture. The rear camera setup has autofocus.',
            'slug' => 'samsung-galaxy-a10s',
            'quantity' => '50',
            'price' => '12500',
            'status' => '1',
            'offer_price' => NULL,
            'admin_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ),
            array(
                'category_id' => '1',
                'brand_id' => '1',
                'title' => 'Samsung Galaxy A20',
                'description' => 'The Samsung Galaxy A10s runs Android 9 Pie and is powered by a 4000mAh battery. As far as the cameras are concerned, the Samsung Galaxy A10s on the rear packs a 13-megapixel primary camera with an f/1.8 aperture and a second 2-megapixel camera with an f/2.4 aperture. The rear camera setup has autofocus.',
                'slug' => 'samsung-galaxy-a10s',
                'quantity' => '20',
                'price' => '10500',
                'status' => '1',
                'offer_price' => NULL,
                'admin_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'category_id' => '1',
                'brand_id' => '1',
                'title' => 'Oppo A5',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'slug' => 'samsung-galaxy-a10s',
                'quantity' => '15',
                'price' => '18000',
                'status' => '1',
                'offer_price' => NULL,
                'admin_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'category_id' => '1',
                'brand_id' => '1',
                'title' => 'Huawei P30 Lite',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'slug' => 'samsung-galaxy-a10s',
                'quantity' => '10',
                'price' => '25000',
                'status' => '1',
                'offer_price' => NULL,
                'admin_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ]);
    }
}
