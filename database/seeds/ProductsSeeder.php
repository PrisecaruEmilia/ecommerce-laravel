<?php

use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('products')->insert([
        //     Product::create([
        //         'name' => 'Laptop Mate',
        //         'slug'  => 'laptop-mate',
        //         'details' => '15 inch, 1TB SSD, 16GB RAM',
        //         'price' => 3500,
        //         'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.'

        //     ])->categories()->attach(1),

        //     Product::create([
        //         'name' => 'Huawei P40 lite',
        //         'slug'  => 'huawei-P40-lite',
        //         'details' => '6.5 inch, 128GB, 6GB RAM',
        //         'price' => 1049,
        //         'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.'

        //     ])->categories()->attach(2),

        //     Product::create([
        //         'name' => 'Smartwatch Samsung Galaxy',
        //         'slug'  => 'smartwatch-samsung-galaxy',
        //         'details' => '1.1 inch, 4GB, 768MB RAM',
        //         'price' => 1199,
        //         'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.'

        //     ])->categories()->attach(3),

        //     Product::create([
        //         'name' => 'Sistem Desktop PC iMac 27',
        //         'slug'  => 'sistem-desktop-PC-iMac-27',
        //         'details' => '27 inch, 512GB SSD, 16GB RAM',
        //         'price' => 14499,
        //         'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.'

        //     ])->categories()->attach(4),

        //     Product::create([
        //         'name' => 'Monitor Gaming LED TN Dell',
        //         'slug'  => 'monitor-gaming-LED-TN-Dell',
        //         'details' => '23.8 inch, 144Hz, HDMI',
        //         'price' => 1099,
        //         'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.'

        //     ])->categories()->attach(4),


        //     Product::create([
        //         'name' => 'Apple Watch 3',
        //         'slug'  => 'apple-watch-3',
        //         'details' => '1.5 inch, 8GB, 1GB RAM',
        //         'price' => 1499,
        //         'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.'

        //     ])->categories()->attach(3),

        //     Product::create([
        //         'name' => 'Apple iPhone 7',
        //         'slug'  => 'apple-iPhone-7',
        //         'details' => '4.7 inch, 32GB, 2GB RAM',
        //         'price' => 1589,
        //         'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.'

        //     ])->categories()->attach(2),

        //     Product::create([
        //         'name' => 'Laptop Gaming ASUS ROG Strix G',
        //         'slug'  => 'laptop-gaming-ASUS-ROG-Strix-G',
        //         'details' => '15.6 inch, 512GB SSD, 8GB RAM',
        //         'price' => 4099,
        //         'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.'

        //     ])->categories()->attach(1)

        //  ]);

         // Laptops
         for ($i=1; $i <= 12; $i++) {
            Product::create([
                'name' => 'Laptop '.$i,
                'slug' => 'laptop-'.$i,
                'details' => [13,14,15][array_rand([13,14,15])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] .' TB SSD, 32GB RAM',
                'price' => rand(3000, 7000),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(1);
        }

        // Make Laptop 1 a Desktop as well. Just to test multiple categories
        $product = Product::find(1);
        $product->categories()->attach(4);

         // Phones
         for ($i = 1; $i <= 4; $i++) {
            Product::create([
                'name' => 'Phone ' . $i,
                'slug' => 'phone-' . $i,
                'details' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [7, 8, 9][array_rand([7, 8, 9])] . ' inch screen, 4GHz Quad Core',
                'price' => rand(1000, 3000),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(2);
        }

        // Smart watches
        for ($i = 1; $i <= 4; $i++) {
            Product::create([
                'name' => 'Smart watch ' . $i,
                'slug' => 'smart-watch-' . $i,
                'details' => [46, 50, 60][array_rand([7, 8, 9])] . ' inch screen, Smart Watch, 4K',
                'price' => rand(1000, 2500),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(3);
        }

        // Desktops
        for ($i = 1; $i <= 4; $i++) {
            Product::create([
                'name' => 'Desktop ' . $i,
                'slug' => 'desktop-' . $i,
                'details' => [24, 25, 27][array_rand([24, 25, 27])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] . ' TB SSD, 32GB RAM',
                'price' => rand(1500, 4000),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(4);
        }

        // Tablets
        for ($i = 1; $i <= 4; $i++) {
            Product::create([
                'name' => 'Tablet ' . $i,
                'slug' => 'tablet-' . $i,
                'details' => [13,14,15][array_rand([13,14,15])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] .' TB SSD, 32GB RAM',
                'price' => rand(1500, 4000),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(5);
        }

        // TVs
        for ($i = 1; $i <= 4; $i++) {
            Product::create([
                'name' => 'TV ' . $i,
                'slug' => 'TV-' . $i,
                'details' => [24, 25, 27][array_rand([24, 25, 27])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] . ' TB SSD, 32GB RAM',
                'price' => rand(2000, 6000),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(6);
        }

         // Digital cameras
         for ($i = 1; $i <= 4; $i++) {
            Product::create([
                'name' => 'Digital Camera ' . $i,
                'slug' => 'camera-' . $i,
                'details' => [46, 50, 60][array_rand([7, 8, 9])] . ' inch screen, Digital Camera, 4K',
                'price' => rand(2000, 5000),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(7);
        }



    }
}
