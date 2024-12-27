<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Men',
                
            ],
            [
                'name' => 'Women',
                
            ],
            [
                'name' => 'Kids',
                
            ],
            [
                'name' => 'Shirts',
                
            ]
            ]);
    }
}
