<?php

use Cartalyst\Stripe\Api\Coupons;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(CouponsSeeder::class);
    }
}
