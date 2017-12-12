<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Category::class, 6)->create();
        factory(App\Models\User::class, 5)->create();
        factory(App\Models\DiscountFood::class, 10)->create();
        factory(App\Models\Food::class, 15)->create();       
    }
}
