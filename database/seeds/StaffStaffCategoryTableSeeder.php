<?php

use Illuminate\Database\Seeder;

class StaffStaffCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staff_staff_category')->delete();
        
        \DB::table('staff_staff_category')->insert(array (
            0 => 
            array (
                'staff_id' => 13,
                'staff_category_id' => 2,
            ),
            1 => 
            array (
                'staff_id' => 9,
                'staff_category_id' => 2,
            ),
            2 => 
            array (
                'staff_id' => 12,
                'staff_category_id' => 2,
            ),
            3 => 
            array (
                'staff_id' => 10,
                'staff_category_id' => 2,
            ),
            4 => 
            array (
                'staff_id' => 6,
                'staff_category_id' => 2,
            ),
            5 => 
            array (
                'staff_id' => 7,
                'staff_category_id' => 2,
            ),
            6 => 
            array (
                'staff_id' => 5,
                'staff_category_id' => 2,
            ),
            7 => 
            array (
                'staff_id' => 3,
                'staff_category_id' => 2,
            ),
            8 => 
            array (
                'staff_id' => 8,
                'staff_category_id' => 2,
            ),
            9 => 
            array (
                'staff_id' => 1,
                'staff_category_id' => 1,
            ),
            10 => 
            array (
                'staff_id' => 2,
                'staff_category_id' => 1,
            ),
            11 => 
            array (
                'staff_id' => 15,
                'staff_category_id' => 1,
            ),
            12 => 
            array (
                'staff_id' => 11,
                'staff_category_id' => 2,
            ),
            13 => 
            array (
                'staff_id' => 4,
                'staff_category_id' => 2,
            ),
            14 => 
            array (
                'staff_id' => 14,
                'staff_category_id' => 2,
            ),
            15 => 
            array (
                'staff_id' => 21,
                'staff_category_id' => 3,
            ),
        ));
        
        
    }
}