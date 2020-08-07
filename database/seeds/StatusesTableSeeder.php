<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('statuses')->delete();
        
        \DB::table('statuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'status' => 'Current',
                'slug' => 'current',
                'created_at' => '2020-06-29 18:11:10',
                'updated_at' => '2020-06-29 18:11:10',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'status' => 'Discontinued',
                'slug' => 'dis',
                'created_at' => '2020-06-29 18:18:26',
                'updated_at' => '2020-06-29 18:18:26',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}