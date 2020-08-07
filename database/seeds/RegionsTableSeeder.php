<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regions')->delete();
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'area' => 'Acton MA',
                'created_at' => '2020-06-17 19:02:11',
                'updated_at' => '2020-06-17 19:09:53',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'area' => 'Boston MA',
                'created_at' => '2020-06-17 19:07:19',
                'updated_at' => '2020-06-17 19:07:19',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'area' => 'Salt Lake City',
                'created_at' => '2020-06-17 19:07:45',
                'updated_at' => '2020-06-17 19:08:35',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'area' => 'Netherlands',
                'created_at' => '2020-06-17 19:08:10',
                'updated_at' => '2020-06-17 19:08:10',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'area' => 'Murray',
                'created_at' => '2020-06-17 19:08:21',
                'updated_at' => '2020-06-17 19:08:21',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'area' => 'USA',
                'created_at' => '2020-06-17 19:08:45',
                'updated_at' => '2020-06-17 19:08:45',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'area' => 'Utah',
                'created_at' => '2020-06-17 19:08:53',
                'updated_at' => '2020-06-17 19:08:53',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'area' => 'Massachusetts',
                'created_at' => '2020-06-17 19:09:21',
                'updated_at' => '2020-06-17 19:09:21',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'area' => 'EMEA',
                'created_at' => '2020-06-17 19:09:39',
                'updated_at' => '2020-06-17 19:09:39',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'area' => 'EMEA & APAC',
                'created_at' => '2020-06-17 19:15:50',
                'updated_at' => '2020-06-17 19:15:50',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'area' => 'APAC',
                'created_at' => '2020-06-17 19:15:56',
                'updated_at' => '2020-06-17 19:15:56',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'area' => 'The Americas',
                'created_at' => '2020-06-17 19:16:08',
                'updated_at' => '2020-06-17 19:16:08',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}