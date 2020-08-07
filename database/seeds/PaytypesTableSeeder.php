<?php

use Illuminate\Database\Seeder;

class PaytypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('paytypes')->delete();
        
        \DB::table('paytypes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Salary',
                'created_at' => '2020-04-01 00:11:07',
                'updated_at' => '2020-04-01 00:11:07',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Hourly',
                'created_at' => '2020-04-01 00:11:16',
                'updated_at' => '2020-04-01 00:11:16',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Contract Hourly',
                'created_at' => '2020-04-08 22:19:13',
                'updated_at' => '2020-04-08 22:19:13',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Contract Salary',
                'created_at' => '2020-04-08 22:19:25',
                'updated_at' => '2020-04-08 22:19:25',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}