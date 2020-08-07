<?php

use Illuminate\Database\Seeder;

class ContentCategoryPostTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('content_category_post')->delete();
        
        \DB::table('content_category_post')->insert(array (
            0 => 
            array (
                'post_id' => 2,
                'content_category_id' => 5,
            ),
            1 => 
            array (
                'post_id' => 3,
                'content_category_id' => 7,
            ),
            2 => 
            array (
                'post_id' => 10,
                'content_category_id' => 4,
            ),
            3 => 
            array (
                'post_id' => 10,
                'content_category_id' => 5,
            ),
            4 => 
            array (
                'post_id' => 10,
                'content_category_id' => 8,
            ),
            5 => 
            array (
                'post_id' => 10,
                'content_category_id' => 7,
            ),
            6 => 
            array (
                'post_id' => 47,
                'content_category_id' => 8,
            ),
            7 => 
            array (
                'post_id' => 46,
                'content_category_id' => 8,
            ),
            8 => 
            array (
                'post_id' => 48,
                'content_category_id' => 8,
            ),
            9 => 
            array (
                'post_id' => 49,
                'content_category_id' => 8,
            ),
        ));
        
        
    }
}