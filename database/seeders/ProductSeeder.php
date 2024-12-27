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
        DB::table('products')->insert([
            [
                'name' => 'T-Shirt 1',
                'color' => 'Red',
                'price' => 1200,
                'image' => 'g1.png',
                'categorie_id' => 2,
            ],
            [
                'name' => 'T-Shirt 2',
                'color' => 'Black',
                'price' => 1200,
                'image' => 'g2.png',
                'categorie_id' => 2,
            ],
            [
                'name' => 'T-Shirt 3',
                'color' => 'Yellow',
                'price' => 1500,
                'image' => 'g3.png',
                'categorie_id' => 2,
            ],
            [
                'name' => 'T-Shirt 4',
                'color' => 'Navy',
                'price' => 1500,
                'image' => 'g4.png',
                'categorie_id' => 2,
            ],
            [
                'name' => 'T-Shirt 5',
                'color' => 'Cream',
                'price' => 1500,
                'image' => 'g5.png',
                'categorie_id' => 2,
            ],
            [
                'name' => 'T-Shirt 6',
                'color' => 'Plain white',
                'price' => 1200,
                'image' => 'sample1.jpg',
                'categorie_id' => 4,
            ],
            [
                'name' => 'T-Shirt 7',
                'color' => 'Plain red',
                'price' => 1500,
                'image' => 'sample2.jpg',
                'categorie_id' => 4,
            ],
            [
                'name' => 'T-Shirt 8',
                'color' => 'Plain navy',
                'price' => 1500,
                'image' => 'sample3.jpg',
                'categorie_id' => 4,
            ],
            [
                'name' => 'T-Shirt 9',
                'color' => 'Plain purple',
                'price' => 1500,
                'image' => 'sample4.jpg',
                'categorie_id' => 4,
            ],
            [
                'name' => 'T-Shirt 10',
                'color' => 'Plain black',
                'price' => 1200,
                'image' => 'sample5.jpg',
                'categorie_id' => 1,
            ],
            [
                'name' => 'T-Shirt 11',
                'color' => 'Plain yellow',
                'price' => 1500,
                'image' => 'sample6.png',
                'categorie_id' => 1,
            ],
            [
                'name' => 'T-Shirt 12',
                'color' => 'Plain gray',
                'price' => 1200,
                'image' => 'sample7.png',
                'categorie_id' => 1,
            ],
            [
                'name' => 'T-Shirt 13',
                'color' => 'Plain orange',
                'price' => 1500,
                'image' => 'sample8.png',
                'categorie_id' => 1,
            ],
            [
                'name' => 'T-Shirt 14',
                'color' => 'Plain green',
                'price' => 1200,
                'image' => 'sample9.png',
                'categorie_id' => 3,
            ],
            [
                'name' => 'T-Shirt 15',
                'color' => 'Plain pink',
                'price' => 1500,
                'image' => 'sample10.png',
                'categorie_id' => 3,
            ],
            [
                'name' => 'T-Shirt 16',
                'color' => 'Plain teal',
                'price' => 1200,
                'image' => 'show1.jpg',
                'categorie_id' => 3,
            ],
            [
                'name' => 'T-Shirt 17',
                'color' => 'Plain navy',
                'price' => 1500,
                'image' => 'slider1.jpg',
                'categorie_id' => 3,
            ],
            [
                'name' => 'T-Shirt 18',
                'color' => 'Plain maroon',
                'price' => 1500,
                'image' => 'slider2.jpg',
                'categorie_id' => 3,
            ],
            [
                'name' => 'T-Shirt 19',
                'color' => 'Plain beige',
                'price' => 1500,
                'image' => 'slider3.jpg',
                'categorie_id' => 3,
            ],
        ]);
    }
}
