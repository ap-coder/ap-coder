<?php

use Illuminate\Database\Seeder;

class DocProductCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doc_product_category')->delete();
        
        \DB::table('doc_product_category')->insert(array (
            0 => 
            array (
                'doc_id' => 23,
                'product_category_id' => 1,
            ),
            1 => 
            array (
                'doc_id' => 24,
                'product_category_id' => 1,
            ),
            2 => 
            array (
                'doc_id' => 46,
                'product_category_id' => 12,
            ),
            3 => 
            array (
                'doc_id' => 50,
                'product_category_id' => 12,
            ),
            4 => 
            array (
                'doc_id' => 51,
                'product_category_id' => 9,
            ),
        ));
        
        
    }
}