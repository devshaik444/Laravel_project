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
            [   'name'=>'Samsung mobile',
                'price'=>'15K',
                'description'=>'good phone',
                'catagory'=>'phone',
                'gallery'=>'https://media.gettyimages.com/photos/samsung-s6-edge-black-sapphire-with-clipping-path-picture-id477407394?s=612x612'
            ],
            [   'name'=>'oppp mobile',
                'price'=>'16K',
                'description'=>'good phone',
                'catagory'=>'phone',
                'gallery'=>'https://i.gadgets360cdn.com/products/large/oppo-reno-6-pro-371x800-1626432591.jpg'
            ],
            [   'name'=>'oppo tv',
                'price'=>'150K',
                'description'=>'good Tv',
                'catagory'=>'Tv',
                'gallery'=>'https://i.gadgets360cdn.com/large/oppo_smart_tv_r1_image_1603173768067.jpg'
            ]
        
            
            
        ]);

    }
}
