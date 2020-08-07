<?php

use Illuminate\Database\Seeder;

class QaTopicsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('qa_topics')->delete();
        
        \DB::table('qa_topics')->insert(array (
            0 => 
            array (
                'id' => 2,
                'subject' => 'testing',
                'creator_id' => 2,
                'receiver_id' => 6,
                'created_at' => '2020-07-31 16:14:56',
                'updated_at' => '2020-07-31 16:14:56',
            ),
            1 => 
            array (
                'id' => 3,
                'subject' => 'testing',
                'creator_id' => 2,
                'receiver_id' => 5,
                'created_at' => '2020-07-31 16:15:11',
                'updated_at' => '2020-07-31 16:15:11',
            ),
        ));
        
        
    }
}