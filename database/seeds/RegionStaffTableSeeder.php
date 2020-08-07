<?php

use Illuminate\Database\Seeder;

class RegionStaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('region_staff')->delete();
        
        \DB::table('region_staff')->insert(array (
            0 => 
            array (
                'staff_id' => 21,
                'region_id' => 12,
            ),
            1 => 
            array (
                'staff_id' => 7,
                'region_id' => 12,
            ),
            2 => 
            array (
                'staff_id' => 20,
                'region_id' => 12,
            ),
            3 => 
            array (
                'staff_id' => 19,
                'region_id' => 12,
            ),
            4 => 
            array (
                'staff_id' => 18,
                'region_id' => 12,
            ),
            5 => 
            array (
                'staff_id' => 17,
                'region_id' => 12,
            ),
            6 => 
            array (
                'staff_id' => 16,
                'region_id' => 12,
            ),
            7 => 
            array (
                'staff_id' => 15,
                'region_id' => 10,
            ),
            8 => 
            array (
                'staff_id' => 14,
                'region_id' => 10,
            ),
            9 => 
            array (
                'staff_id' => 13,
                'region_id' => 10,
            ),
            10 => 
            array (
                'staff_id' => 12,
                'region_id' => 10,
            ),
            11 => 
            array (
                'staff_id' => 11,
                'region_id' => 12,
            ),
            12 => 
            array (
                'staff_id' => 10,
                'region_id' => 12,
            ),
            13 => 
            array (
                'staff_id' => 9,
                'region_id' => 12,
            ),
            14 => 
            array (
                'staff_id' => 8,
                'region_id' => 12,
            ),
            15 => 
            array (
                'staff_id' => 6,
                'region_id' => 12,
            ),
            16 => 
            array (
                'staff_id' => 5,
                'region_id' => 12,
            ),
            17 => 
            array (
                'staff_id' => 4,
                'region_id' => 12,
            ),
            18 => 
            array (
                'staff_id' => 3,
                'region_id' => 12,
            ),
            19 => 
            array (
                'staff_id' => 2,
                'region_id' => 12,
            ),
            20 => 
            array (
                'staff_id' => 1,
                'region_id' => 10,
            ),
            21 => 
            array (
                'staff_id' => 1,
                'region_id' => 12,
            ),
        ));
        
        
    }
}