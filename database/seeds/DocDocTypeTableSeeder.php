<?php

use Illuminate\Database\Seeder;

class DocDocTypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doc_doc_type')->delete();
        
        \DB::table('doc_doc_type')->insert(array (
            0 => 
            array (
                'doc_id' => 21,
                'doc_type_id' => 1,
            ),
            1 => 
            array (
                'doc_id' => 20,
                'doc_type_id' => 1,
            ),
            2 => 
            array (
                'doc_id' => 19,
                'doc_type_id' => 1,
            ),
            3 => 
            array (
                'doc_id' => 18,
                'doc_type_id' => 1,
            ),
            4 => 
            array (
                'doc_id' => 17,
                'doc_type_id' => 1,
            ),
            5 => 
            array (
                'doc_id' => 16,
                'doc_type_id' => 1,
            ),
            6 => 
            array (
                'doc_id' => 15,
                'doc_type_id' => 1,
            ),
            7 => 
            array (
                'doc_id' => 14,
                'doc_type_id' => 1,
            ),
            8 => 
            array (
                'doc_id' => 13,
                'doc_type_id' => 1,
            ),
            9 => 
            array (
                'doc_id' => 12,
                'doc_type_id' => 1,
            ),
            10 => 
            array (
                'doc_id' => 11,
                'doc_type_id' => 1,
            ),
            11 => 
            array (
                'doc_id' => 10,
                'doc_type_id' => 1,
            ),
            12 => 
            array (
                'doc_id' => 9,
                'doc_type_id' => 1,
            ),
            13 => 
            array (
                'doc_id' => 8,
                'doc_type_id' => 1,
            ),
            14 => 
            array (
                'doc_id' => 7,
                'doc_type_id' => 1,
            ),
            15 => 
            array (
                'doc_id' => 6,
                'doc_type_id' => 1,
            ),
            16 => 
            array (
                'doc_id' => 5,
                'doc_type_id' => 1,
            ),
            17 => 
            array (
                'doc_id' => 4,
                'doc_type_id' => 1,
            ),
            18 => 
            array (
                'doc_id' => 3,
                'doc_type_id' => 1,
            ),
            19 => 
            array (
                'doc_id' => 2,
                'doc_type_id' => 1,
            ),
        ));
        
        
    }
}