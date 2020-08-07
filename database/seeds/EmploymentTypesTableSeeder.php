<?php

use Illuminate\Database\Seeder;

class EmploymentTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employment_types')->delete();
        
        \DB::table('employment_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Full Time',
                'created_at' => '2020-04-01 00:11:35',
                'updated_at' => '2020-04-01 00:11:35',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Part Time',
                'created_at' => '2020-04-01 00:11:43',
                'updated_at' => '2020-04-01 00:11:43',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Contract',
                'created_at' => '2020-04-01 00:11:50',
                'updated_at' => '2020-04-01 00:11:50',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Intern',
                'created_at' => '2020-04-01 00:11:58',
                'updated_at' => '2020-04-01 00:11:58',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Remote',
                'created_at' => '2020-04-01 00:12:05',
                'updated_at' => '2020-04-01 00:12:05',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}