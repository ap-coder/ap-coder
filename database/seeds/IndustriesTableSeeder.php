<?php

use Illuminate\Database\Seeder;

class IndustriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('industries')->delete();
        
        \DB::table('industries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Healthcare',
                'description' => NULL,
                'published' => 1,
                'slug' => NULL,
                'created_at' => '2020-06-29 22:02:30',
                'updated_at' => '2020-06-29 22:02:30',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Retail',
                'description' => NULL,
                'published' => 1,
                'slug' => NULL,
                'created_at' => '2020-06-29 22:03:12',
                'updated_at' => '2020-06-29 22:04:03',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Manufacturing',
                'description' => NULL,
                'published' => 1,
                'slug' => 'manufacturing',
                'created_at' => '2020-06-29 22:03:49',
                'updated_at' => '2020-07-16 17:19:01',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Commercial',
                'description' => NULL,
                'published' => 0,
                'slug' => NULL,
                'created_at' => '2020-06-29 22:04:21',
                'updated_at' => '2020-06-29 22:04:21',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Industrial',
                'description' => NULL,
                'published' => 1,
                'slug' => NULL,
                'created_at' => '2020-06-29 22:04:41',
                'updated_at' => '2020-06-29 22:04:41',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Software',
                'description' => NULL,
                'published' => 1,
                'slug' => NULL,
                'created_at' => '2020-06-29 22:05:23',
                'updated_at' => '2020-06-29 22:05:23',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
        ));
        
        
    }
}