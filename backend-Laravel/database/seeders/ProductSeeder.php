<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => "Xiaomi",
            'description' => "Movil android",
            'price' => 150,
            'category' => "Telefono",
            'quantity' => 21,
        ]);
        DB::table('products')->insert([
            'name' => "Samsung Galaxy S20",
            'description' => "Movil android",
            'price' => 700,
            'category' => "Telefono",
            'quantity' => 21,
        ]);
        DB::table('products')->insert([
            'name' => "Iphone 13",
            'description' => "Movil apple",
            'price' => 950,
            'category' => "Telefono",
            'quantity' => 21,
        ]);
        DB::table('products')->insert([
            'name' => "Xiaomi",
            'description' => "Movil android",
            'price' => 150,
            'category' => "Telefono",
            'quantity' => 21,
        ]);
        DB::table('products')->insert([
            'name' => "Samsung Galaxy S20",
            'description' => "Movil android",
            'price' => 700,
            'category' => "Telefono",
            'quantity' => 21,
        ]);
        DB::table('products')->insert([
            'name' => "Iphone 13",
            'description' => "Movil apple",
            'price' => 950,
            'category' => "Telefono",
            'quantity' => 21,
        ]);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
