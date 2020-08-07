<?php

use Illuminate\Database\Seeder;

class NewsProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news_product')->delete();
        
        \DB::table('news_product')->insert(array (
            0 => 
            array (
                'news_id' => 14,
                'product_id' => 5,
            ),
            1 => 
            array (
                'news_id' => 17,
                'product_id' => 13,
            ),
            2 => 
            array (
                'news_id' => 17,
                'product_id' => 14,
            ),
            3 => 
            array (
                'news_id' => 18,
                'product_id' => 104,
            ),
            4 => 
            array (
                'news_id' => 18,
                'product_id' => 105,
            ),
            5 => 
            array (
                'news_id' => 18,
                'product_id' => 106,
            ),
            6 => 
            array (
                'news_id' => 18,
                'product_id' => 107,
            ),
            7 => 
            array (
                'news_id' => 3,
                'product_id' => 5,
            ),
        ));
        
        
    }
}