<?php

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('education')->delete();
        
        \DB::table('education')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Intern',
                'years_of_exp' => NULL,
                'description' => NULL,
                'created_at' => '2020-04-01 00:27:33',
                'updated_at' => '2020-04-01 00:27:33',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}