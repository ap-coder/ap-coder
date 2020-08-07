<?php

use Illuminate\Database\Seeder;

class ContentTagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('content_tags')->delete();
        
        \DB::table('content_tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'barcode scanning',
                'slug' => 'barcode-scanning',
                'created_at' => '2020-07-14 20:02:44',
                'updated_at' => '2020-07-14 20:02:44',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'medical devices',
                'slug' => 'medical-devices',
                'created_at' => '2020-07-14 20:03:09',
                'updated_at' => '2020-07-14 20:03:22',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'scanning devices',
                'slug' => 'scanning-devices',
                'created_at' => '2020-07-14 20:19:32',
                'updated_at' => '2020-07-14 20:19:32',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}