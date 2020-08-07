<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Product Management Department',
                'description' => NULL,
                'published' => 0,
                'slug' => NULL,
                'created_at' => '2020-04-01 00:24:57',
                'updated_at' => '2020-04-01 00:24:57',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Marketing Department',
                'description' => NULL,
                'published' => 0,
                'slug' => NULL,
                'created_at' => '2020-04-01 00:25:06',
                'updated_at' => '2020-04-01 00:25:06',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Engineering Department',
                'description' => NULL,
                'published' => 0,
                'slug' => NULL,
                'created_at' => '2020-04-01 00:25:21',
                'updated_at' => '2020-04-01 00:25:21',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
            'name' => 'Technology Department (located in Boston)',
                'description' => NULL,
                'published' => 0,
                'slug' => NULL,
                'created_at' => '2020-04-01 00:25:32',
                'updated_at' => '2020-04-01 00:25:32',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Operations Department',
                'description' => NULL,
                'published' => 0,
                'slug' => NULL,
                'created_at' => '2020-04-01 00:25:40',
                'updated_at' => '2020-04-01 00:25:40',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Other',
                'description' => NULL,
                'published' => 0,
                'slug' => NULL,
                'created_at' => '2020-04-01 00:27:20',
                'updated_at' => '2020-04-01 00:27:20',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Sales Department',
                'description' => NULL,
                'published' => 0,
                'slug' => NULL,
                'created_at' => '2020-06-18 23:25:13',
                'updated_at' => '2020-06-18 23:25:13',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}