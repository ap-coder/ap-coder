<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Admin',
                'created_at' => '2020-06-15 18:32:28',
                'updated_at' => '2020-06-15 18:32:28',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'User',
                'created_at' => '2020-06-15 18:32:28',
                'updated_at' => '2020-06-15 18:32:28',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Developer',
                'created_at' => '2020-06-15 18:32:28',
                'updated_at' => '2020-06-15 18:32:28',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Editor',
                'created_at' => '2020-06-15 19:02:29',
                'updated_at' => '2020-06-15 19:02:29',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Private Area Member',
                'created_at' => '2020-07-22 16:34:06',
                'updated_at' => '2020-07-22 16:34:06',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}