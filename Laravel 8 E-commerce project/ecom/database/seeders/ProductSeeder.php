<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'OPPO Mobile',
            'price'=>'28000৳',
            'discription'=>'A smart phone with 8GB/256GB Ram and much more feature',
            'category'=>'Mobile',
            'gallery'=>'https://cdn1.smartprix.com/rx-iKDqwE5n7-w1200-h1200/oppo-k5-8gb-ram-256g.jpg'
            ],
            [
            'name'=>'Panasonic Tv',
            'price'=>'23000৳',
            'discription'=>'A smart Tv With much more feature',
            'category'=>'TV',
            'gallery'=>'https://static.digit.in/default/514997f36523c8adf3cb55a2d5f552a58b5bbabb.jpeg?tr=w-1200'
            ],
            [
            'name'=>'Sony Tv',
            'price'=>'25000৳',
            'discription'=>'A smart Tv much more feature',
            'category'=>'TV',
            'gallery'=>'https://thegoodguys.sirv.com/products/50075391/50075391_771376.PNG'
            ],
            [
            'name'=>'Singer Frize',
            'price'=>'40000৳',
            'discription'=>'A smart Frize much more feature',
            'category'=>'Mobile',
            'gallery'=>'https://www.familyneeds.net/images/products/singer-refrigerator-bcd-208i1493530028.jpg'
            ]
        ]);
    }
}
