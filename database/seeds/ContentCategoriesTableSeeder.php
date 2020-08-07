<?php

use Illuminate\Database\Seeder;

class ContentCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('content_categories')->delete();
        
        \DB::table('content_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Handheld Scanners',
                'slug' => 'handheld-scanners',
                'published' => 0,
                'created_at' => '2020-06-16 15:32:32',
                'updated_at' => '2020-06-16 15:32:32',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Fixed-Mount Scanners',
                'slug' => 'fixed-mount-scanners',
                'published' => 0,
                'created_at' => '2020-06-16 15:33:06',
                'updated_at' => '2020-06-16 15:33:06',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'In-Counter Scanners',
                'slug' => 'in-counter-scanners',
                'published' => 0,
                'created_at' => '2020-06-16 15:33:33',
                'updated_at' => '2020-06-16 15:33:33',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'On-Counter Scanners',
                'slug' => 'on-counter-scanners',
                'published' => 0,
                'created_at' => '2020-06-16 15:33:57',
                'updated_at' => '2020-06-16 15:33:57',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Retail Scanners',
                'slug' => 'retail-scanners',
                'published' => 1,
                'created_at' => '2020-07-14 19:07:22',
                'updated_at' => '2020-07-14 19:07:37',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Medical Administration',
                'slug' => 'medical-administration',
                'published' => 1,
                'created_at' => '2020-07-14 19:57:08',
                'updated_at' => '2020-07-14 19:57:08',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Cannabis Barcode Scanning',
                'slug' => 'cannabis-barcode-scanning',
                'published' => 1,
                'created_at' => '2020-07-14 20:22:49',
                'updated_at' => '2020-07-14 20:22:49',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Barcode Scanner',
                'slug' => 'barcode-scanner',
                'published' => 1,
                'created_at' => '2020-07-16 18:39:36',
                'updated_at' => '2020-07-16 18:39:36',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
        ));
        
        
    }
}