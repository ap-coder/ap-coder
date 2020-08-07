<?php

use Illuminate\Database\Seeder;

class QaMessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('qa_messages')->delete();
        
        \DB::table('qa_messages')->insert(array (
            0 => 
            array (
                'id' => 2,
                'topic_id' => 2,
                'sender_id' => 2,
                'read_at' => NULL,
                'content' => 'write back if you get this.',
                'created_at' => '2020-07-31 16:14:56',
                'updated_at' => '2020-07-31 16:14:56',
            ),
            1 => 
            array (
                'id' => 3,
                'topic_id' => 3,
                'sender_id' => 2,
                'read_at' => NULL,
                'content' => 'write back if you get this.',
                'created_at' => '2020-07-31 16:15:11',
                'updated_at' => '2020-07-31 16:15:11',
            ),
        ));
        
        
    }
}