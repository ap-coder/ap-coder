<?php

use Illuminate\Database\Seeder;

class JobSkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('job_skills')->delete();
        
        \DB::table('job_skills')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Microsoft Office experience',
                'created_at' => '2020-04-08 22:25:39',
                'updated_at' => '2020-04-08 22:25:39',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}