<?php

use Illuminate\Database\Seeder;

class ProductProductTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_product_tag')->delete();
        
        \DB::table('product_product_tag')->insert(array (
            0 => 
            array (
                'product_id' => 2,
                'product_tag_id' => 1,
            ),
            1 => 
            array (
                'product_id' => 2,
                'product_tag_id' => 2,
            ),
            2 => 
            array (
                'product_id' => 9,
                'product_tag_id' => 1,
            ),
            3 => 
            array (
                'product_id' => 8,
                'product_tag_id' => 3,
            ),
            4 => 
            array (
                'product_id' => 6,
                'product_tag_id' => 3,
            ),
            5 => 
            array (
                'product_id' => 4,
                'product_tag_id' => 3,
            ),
            6 => 
            array (
                'product_id' => 7,
                'product_tag_id' => 1,
            ),
            7 => 
            array (
                'product_id' => 5,
                'product_tag_id' => 1,
            ),
            8 => 
            array (
                'product_id' => 3,
                'product_tag_id' => 1,
            ),
            9 => 
            array (
                'product_id' => 10,
                'product_tag_id' => 2,
            ),
            10 => 
            array (
                'product_id' => 11,
                'product_tag_id' => 2,
            ),
        ));
        
        
    }
}