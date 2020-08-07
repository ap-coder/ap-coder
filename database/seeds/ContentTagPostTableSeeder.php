<?php

use Illuminate\Database\Seeder;

class ContentTagPostTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('content_tag_post')->delete();
        
        \DB::table('content_tag_post')->insert(array (
            0 => 
            array (
                'post_id' => 3,
                'content_tag_id' => 1,
            ),
            1 => 
            array (
                'post_id' => 3,
                'content_tag_id' => 3,
            ),
            2 => 
            array (
                'post_id' => 47,
                'content_tag_id' => 1,
            ),
            3 => 
            array (
                'post_id' => 46,
                'content_tag_id' => 1,
            ),
            4 => 
            array (
                'post_id' => 46,
                'content_tag_id' => 3,
            ),
        ));
        
        
    }
}