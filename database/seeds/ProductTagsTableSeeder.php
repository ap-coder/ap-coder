<?php

use Illuminate\Database\Seeder;

class ProductTagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_tags')->delete();
        
        \DB::table('product_tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Handheld Scanners',
                'created_at' => '2020-06-19 23:04:17',
                'updated_at' => '2020-06-19 23:04:17',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Barcode Scanner',
                'created_at' => '2020-06-19 23:04:32',
                'updated_at' => '2020-06-19 23:04:32',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Extra High Density',
                'created_at' => '2020-07-27 22:50:27',
                'updated_at' => '2020-07-27 22:50:27',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}