<?php

use Illuminate\Database\Seeder;

class FirmwareProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('firmware_product')->delete();
        
        \DB::table('firmware_product')->insert(array (
            0 => 
            array (
                'firmware_id' => 1,
                'product_id' => 2,
            ),
            1 => 
            array (
                'firmware_id' => 2,
                'product_id' => 44,
            ),
            2 => 
            array (
                'firmware_id' => 3,
                'product_id' => 45,
            ),
            3 => 
            array (
                'firmware_id' => 4,
                'product_id' => 5,
            ),
            4 => 
            array (
                'firmware_id' => 2,
                'product_id' => 2,
            ),
            5 => 
            array (
                'firmware_id' => 5,
                'product_id' => 2,
            ),
            6 => 
            array (
                'firmware_id' => 3,
                'product_id' => 2,
            ),
            7 => 
            array (
                'firmware_id' => 5,
                'product_id' => 5,
            ),
            8 => 
            array (
                'firmware_id' => 7,
                'product_id' => 7,
            ),
            9 => 
            array (
                'firmware_id' => 8,
                'product_id' => 7,
            ),
            10 => 
            array (
                'firmware_id' => 5,
                'product_id' => 7,
            ),
            11 => 
            array (
                'firmware_id' => 5,
                'product_id' => 3,
            ),
            12 => 
            array (
                'firmware_id' => 9,
                'product_id' => 3,
            ),
            13 => 
            array (
                'firmware_id' => 5,
                'product_id' => 10,
            ),
            14 => 
            array (
                'firmware_id' => 10,
                'product_id' => 10,
            ),
            15 => 
            array (
                'firmware_id' => 5,
                'product_id' => 14,
            ),
            16 => 
            array (
                'firmware_id' => 11,
                'product_id' => 14,
            ),
            17 => 
            array (
                'firmware_id' => 12,
                'product_id' => 8,
            ),
            18 => 
            array (
                'firmware_id' => 13,
                'product_id' => 8,
            ),
            19 => 
            array (
                'firmware_id' => 15,
                'product_id' => 8,
            ),
            20 => 
            array (
                'firmware_id' => 14,
                'product_id' => 8,
            ),
            21 => 
            array (
                'firmware_id' => 17,
                'product_id' => 8,
            ),
            22 => 
            array (
                'firmware_id' => 16,
                'product_id' => 8,
            ),
            23 => 
            array (
                'firmware_id' => 18,
                'product_id' => 11,
            ),
        ));
        
        
    }
}