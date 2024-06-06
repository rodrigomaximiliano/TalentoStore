<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => "MSI Gaming Laptop",
                'description' => "Notebook gaming con procesador Intel i7 y tarjeta gráfica NVIDIA RTX 3060",
                'price' => 1500,
                'category' => "Notebook",
                'quantity' => 15,
                'image' => 'notebooks/msiGaming.jpg',
            ],
            [
                'name' => "Asus ROG Strix",
                'description' => "Notebook gaming con pantalla de 17 pulgadas y GPU NVIDIA RTX 3080",
                'price' => 2200,
                'category' => "Notebook",
                'quantity' => 10,
                'image' => 'notebooks/asusRogSrtix.png',
            ],
            [
                'name' => "Alienware M15",
                'description' => "Notebook gaming de alto rendimiento con diseño futurista y potente sistema de refrigeración",
                'price' => 2500,
                'category' => "Notebook",
                'quantity' => 8,
                'image' => 'notebooks/alienwarem15.jpg',
            ],
            [
                'name' => "Razer Blade 15",
                'description' => "Notebook gaming ultra delgado con pantalla de 15.6 pulgadas y GPU NVIDIA RTX 3070",
                'price' => 2000,
                'category' => "Notebook",
                'quantity' => 12,
                'image' => 'notebooks/razerBlade15.jpg',
            ],
            [
                'name' => "HP Omen 15",
                'description' => "Notebook gaming con procesador AMD Ryzen 7 y tarjeta gráfica NVIDIA GTX 1660 Ti",
                'price' => 1400,
                'category' => "Notebook",
                'quantity' => 20,
                'image' => 'notebooks/hpOmen.jpg',
            ],
            [
                'name' => "Lenovo Legion 5",
                'description' => "Notebook gaming con procesador AMD Ryzen 5 y GPU NVIDIA RTX 2060",
                'price' => 1300,
                'category' => "Notebook",
                'quantity' => 18,
                'image' => 'notebooks/lenovoLegion.png',
            ],
            [
                'name' => "Acer Predator Helios 300",
                'description' => "Notebook gaming con pantalla de 144Hz y GPU NVIDIA RTX 3060",
                'price' => 1600,
                'category' => "Notebook",
                'quantity' => 15,
                'image' => 'notebooks/acerPredator.jpg',
            ],
            [
                'name' => "Gigabyte Aorus 15G",
                'description' => "Notebook gaming con teclado mecánico y GPU NVIDIA RTX 3070",
                'price' => 1900,
                'category' => "Notebook",
                'quantity' => 9,
                'image' => 'notebooks/asus15g.jpg',
            ],
            [
                'name' => "Dell G5 15",
                'description' => "Notebook gaming asequible con procesador Intel i5 y GPU NVIDIA GTX 1650",
                'price' => 1000,
                'category' => "Notebook",
                'quantity' => 25,
                'image' => 'notebooks/dellG5.webp',
            ],
            [
                'name' => "Asus TUF Gaming A15",
                'description' => "Notebook gaming duradero con procesador AMD Ryzen 7 y GPU NVIDIA GTX 1660 Ti",
                'price' => 1200,
                'category' => "Notebook",
                'quantity' => 22,
                'image' => 'notebooks/asustufgaming.jpg',
            ],
            [
                'name' => "Razer Blade Stealth 13",
                'description' => "Notebook gaming compacto con pantalla de 13.3 pulgadas y GPU NVIDIA GTX 1650 Ti",
                'price' => 1800,
                'category' => "Notebook",
                'quantity' => 11,
                'image' => 'notebooks/razerbladest.jpg',
            ],
            [
                'name' => "MSI GE75 Raider",
                'description' => "Notebook gaming con pantalla de 17.3 pulgadas y GPU NVIDIA RTX 2070",
                'price' => 2100,
                'category' => "Notebook",
                'quantity' => 10,
                'image' => 'notebooks/msige74raider.jpg',
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}
