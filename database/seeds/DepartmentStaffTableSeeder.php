<?php

use Illuminate\Database\Seeder;

class DepartmentStaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('department_staff')->delete();
        
        \DB::table('department_staff')->insert(array (
            0 => 
            array (
                'staff_id' => 13,
                'department_id' => 7,
            ),
            1 => 
            array (
                'staff_id' => 9,
                'department_id' => 7,
            ),
            2 => 
            array (
                'staff_id' => 15,
                'department_id' => 7,
            ),
            3 => 
            array (
                'staff_id' => 12,
                'department_id' => 7,
            ),
            4 => 
            array (
                'staff_id' => 10,
                'department_id' => 7,
            ),
            5 => 
            array (
                'staff_id' => 6,
                'department_id' => 7,
            ),
            6 => 
            array (
                'staff_id' => 7,
                'department_id' => 7,
            ),
            7 => 
            array (
                'staff_id' => 5,
                'department_id' => 7,
            ),
            8 => 
            array (
                'staff_id' => 2,
                'department_id' => 7,
            ),
            9 => 
            array (
                'staff_id' => 3,
                'department_id' => 7,
            ),
            10 => 
            array (
                'staff_id' => 8,
                'department_id' => 7,
            ),
            11 => 
            array (
                'staff_id' => 11,
                'department_id' => 7,
            ),
            12 => 
            array (
                'staff_id' => 4,
                'department_id' => 7,
            ),
            13 => 
            array (
                'staff_id' => 14,
                'department_id' => 7,
            ),
            14 => 
            array (
                'staff_id' => 21,
                'department_id' => 2,
            ),
            15 => 
            array (
                'staff_id' => 20,
                'department_id' => 7,
            ),
            16 => 
            array (
                'staff_id' => 19,
                'department_id' => 7,
            ),
            17 => 
            array (
                'staff_id' => 18,
                'department_id' => 7,
            ),
            18 => 
            array (
                'staff_id' => 17,
                'department_id' => 7,
            ),
            19 => 
            array (
                'staff_id' => 16,
                'department_id' => 7,
            ),
            20 => 
            array (
                'staff_id' => 1,
                'department_id' => 2,
            ),
            21 => 
            array (
                'staff_id' => 1,
                'department_id' => 7,
            ),
        ));
        
        
    }
}