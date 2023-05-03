<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                'brand_id'=>1,
                'category_id'=>1,
                'item_name'=>'Shirt-1',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>1,
                'category_id'=>2,
                'item_name'=>'Bag-1',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>1,
                'category_id'=>3,
                'item_name'=>'Shoes-1',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>1,
                'category_id'=>4,
                'item_name'=>'Dress-1',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>2,
                'category_id'=>1,
                'item_name'=>'Shirt-2',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>2,
                'category_id'=>2,
                'item_name'=>'Bag-2',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>2,
                'category_id'=>3,
                'item_name'=>'Shoes-2',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>2,
                'category_id'=>4,
                'item_name'=>'Dress-2',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>3,
                'category_id'=>1,
                'item_name'=>'Shirt-3',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>3,
                'category_id'=>2,
                'item_name'=>'Bag-3',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>3,
                'category_id'=>3,
                'item_name'=>'Shoes-3',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>3,
                'category_id'=>4,
                'item_name'=>'Dress-3',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>4,
                'category_id'=>1,
                'item_name'=>'Shirt-4',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>4,
                'category_id'=>2,
                'item_name'=>'Bag-4',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>4,
                'category_id'=>3,
                'item_name'=>'Shoes-4',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>4,
                'category_id'=>4,
                'item_name'=>'Dress-4',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>5,
                'category_id'=>1,
                'item_name'=>'Shirt-5',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>5,
                'category_id'=>2,
                'item_name'=>'Bag-5',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>5,
                'category_id'=>3,
                'item_name'=>'Shoes-5',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
            [
                'brand_id'=>5,
                'category_id'=>4,
                'item_name'=>'Dress-5',
                'price'=>10000,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem enim repudiandae atque assumenda corrupti. Esse optio consequuntur corrupti est. Ea dolorem praesentium culpa rerum laborum ipsam ex possimus molestias suscipit.'
            ],
        ]);
    }
}
