<?php

use Illuminate\Database\Seeder;

class DocTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doc_types')->delete();
        
        \DB::table('doc_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'M Code',
                'slug' => 'm-code',
                'created_at' => '2020-06-23 23:14:16',
                'updated_at' => '2020-06-23 23:14:16',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}