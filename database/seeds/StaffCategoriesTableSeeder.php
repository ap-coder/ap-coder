<?php

use Illuminate\Database\Seeder;

class StaffCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staff_categories')->delete();
        
        \DB::table('staff_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Leadership',
                'description' => NULL,
                'published' => 0,
                'slug' => NULL,
                'created_at' => '2020-06-17 16:00:03',
                'updated_at' => '2020-06-17 16:00:03',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Sales',
                'description' => NULL,
                'published' => 0,
                'slug' => NULL,
                'created_at' => '2020-06-17 16:00:13',
                'updated_at' => '2020-06-17 16:00:13',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Marketing',
                'description' => NULL,
                'published' => 0,
                'slug' => NULL,
                'created_at' => '2020-06-17 16:00:25',
                'updated_at' => '2020-06-17 16:00:25',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Software Engineering',
                'description' => NULL,
                'published' => 0,
                'slug' => NULL,
                'created_at' => '2020-06-17 16:00:36',
                'updated_at' => '2020-06-17 16:00:36',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Production & Assembly',
                'description' => NULL,
                'published' => 0,
                'slug' => NULL,
                'created_at' => '2020-06-17 16:00:56',
                'updated_at' => '2020-06-17 16:00:56',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
        ));
        
        
    }
}