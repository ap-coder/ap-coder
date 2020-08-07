<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_categories')->delete();
        
        \DB::table('product_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Healthcare',
                'description' => NULL,
                'slug' => 'healthcare',
                'published' => 1,
                'created_at' => '2020-04-01 00:59:21',
                'updated_at' => '2020-06-24 17:48:24',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Accessories',
                'description' => NULL,
                'slug' => NULL,
                'published' => 1,
                'created_at' => '2020-04-01 00:59:35',
                'updated_at' => '2020-06-18 16:49:12',
                'deleted_at' => '2020-06-18 16:49:12',
                'status_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Cannabis',
                'description' => NULL,
                'slug' => 'cannabis',
                'published' => 1,
                'created_at' => '2020-04-01 00:59:47',
                'updated_at' => '2020-06-24 17:48:11',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Discontinued',
                'description' => NULL,
                'slug' => 'discontinued',
                'published' => 1,
                'created_at' => '2020-04-01 01:00:02',
                'updated_at' => '2020-07-27 19:16:50',
                'deleted_at' => '2020-07-27 19:16:50',
                'status_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Event Management',
                'description' => NULL,
                'slug' => 'event-management',
                'published' => 1,
                'created_at' => '2020-04-01 01:00:12',
                'updated_at' => '2020-06-24 17:48:18',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Government',
                'description' => NULL,
                'slug' => 'government',
                'published' => 1,
                'created_at' => '2020-04-01 01:00:23',
                'updated_at' => '2020-06-24 17:48:20',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Hospitality',
                'description' => NULL,
                'slug' => 'hospitality',
                'published' => 1,
                'created_at' => '2020-04-01 01:01:04',
                'updated_at' => '2020-06-24 17:48:31',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Industrial',
                'description' => NULL,
                'slug' => 'industrial',
                'published' => 1,
                'created_at' => '2020-04-01 01:01:18',
                'updated_at' => '2020-06-24 17:48:34',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Manufacturing',
                'description' => NULL,
                'slug' => 'manufacturing',
                'published' => 1,
                'created_at' => '2020-04-01 01:01:27',
                'updated_at' => '2020-06-24 17:48:38',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Mobile',
                'description' => NULL,
                'slug' => 'mobile',
                'published' => 1,
                'created_at' => '2020-04-01 01:01:35',
                'updated_at' => '2020-06-24 17:48:00',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'OEM',
                'description' => NULL,
                'slug' => 'oem',
                'published' => 1,
                'created_at' => '2020-04-01 01:01:50',
                'updated_at' => '2020-06-24 17:47:56',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Retail',
                'description' => NULL,
                'slug' => 'retail',
                'published' => 1,
                'created_at' => '2020-04-01 01:02:04',
                'updated_at' => '2020-06-24 17:47:48',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Services',
                'description' => NULL,
                'slug' => 'services',
                'published' => 1,
                'created_at' => '2020-04-01 01:02:14',
                'updated_at' => '2020-06-24 17:47:45',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Software',
                'description' => NULL,
                'slug' => NULL,
                'published' => 1,
                'created_at' => '2020-04-01 01:02:26',
                'updated_at' => '2020-06-18 16:49:18',
                'deleted_at' => '2020-06-18 16:49:18',
                'status_id' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Hardware',
                'description' => NULL,
                'slug' => NULL,
                'published' => 1,
                'created_at' => '2020-06-15 21:24:03',
                'updated_at' => '2020-06-18 16:49:27',
                'deleted_at' => '2020-06-18 16:49:27',
                'status_id' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Power',
                'description' => NULL,
                'slug' => 'power',
                'published' => 1,
                'created_at' => '2020-06-18 16:59:33',
                'updated_at' => '2020-06-24 17:47:52',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Stands and Mounts',
                'description' => NULL,
                'slug' => 'stands-and-mounts',
                'published' => 1,
                'created_at' => '2020-06-18 17:00:41',
                'updated_at' => '2020-06-24 17:46:42',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Modems',
                'description' => NULL,
                'slug' => 'modems',
                'published' => 1,
                'created_at' => '2020-06-18 17:00:58',
                'updated_at' => '2020-06-24 17:47:59',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Cables',
                'description' => NULL,
                'slug' => 'cables',
                'published' => 1,
                'created_at' => '2020-06-18 17:02:35',
                'updated_at' => '2020-06-24 17:48:08',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Brackets',
                'description' => NULL,
                'slug' => 'brackets',
                'published' => 1,
                'created_at' => '2020-06-18 17:04:04',
                'updated_at' => '2020-06-24 17:47:41',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'On-Counter Scanners',
                'description' => NULL,
                'slug' => 'on-counter-scanners',
                'published' => 1,
                'created_at' => '2020-06-19 03:08:00',
                'updated_at' => '2020-06-24 17:47:54',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'In-Counter Scanners',
                'description' => NULL,
                'slug' => 'in-counter-scanners',
                'published' => 1,
                'created_at' => '2020-06-19 03:08:09',
                'updated_at' => '2020-06-24 17:48:33',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Fixed-Mount Scanners',
                'description' => NULL,
                'slug' => 'fixed-mount-scanners',
                'published' => 1,
                'created_at' => '2020-06-19 03:08:23',
                'updated_at' => '2020-06-24 17:48:18',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Handheld Scanners',
                'description' => NULL,
                'slug' => 'handheld-scanners',
                'published' => 1,
                'created_at' => '2020-06-19 03:08:46',
                'updated_at' => '2020-06-19 03:08:46',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Current',
                'description' => NULL,
                'slug' => 'current',
                'published' => 1,
                'created_at' => '2020-06-29 14:04:53',
                'updated_at' => '2020-07-27 19:16:54',
                'deleted_at' => '2020-07-27 19:16:54',
                'status_id' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Handheld Imagers',
                'description' => NULL,
                'slug' => 'handheld-imagers',
                'published' => 1,
                'created_at' => '2020-07-27 19:17:57',
                'updated_at' => '2020-07-27 19:17:57',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'General Purpose Scanners',
                'description' => NULL,
                'slug' => 'general-purpose-scanners',
                'published' => 1,
                'created_at' => '2020-07-27 19:20:50',
                'updated_at' => '2020-07-27 19:20:50',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Heavy Duty Scanners',
                'description' => NULL,
                'slug' => 'heavy-duty-scanners',
                'published' => 1,
                'created_at' => '2020-07-27 19:21:14',
                'updated_at' => '2020-07-27 19:21:14',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Ultra Heavy Duty Scanners',
                'description' => NULL,
                'slug' => 'ultra-heavy-duty-scanners',
                'published' => 1,
                'created_at' => '2020-07-27 19:21:26',
                'updated_at' => '2020-07-27 19:21:26',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Healthcare Scanners',
                'description' => NULL,
                'slug' => 'healthcare-scanners',
                'published' => 1,
                'created_at' => '2020-07-27 19:21:46',
                'updated_at' => '2020-07-27 19:21:46',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Multi-Plane Scanners',
                'description' => NULL,
                'slug' => 'multi-plane-scanners',
                'published' => 1,
                'created_at' => '2020-07-27 19:21:54',
                'updated_at' => '2020-07-27 19:21:54',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Companion Scanners',
                'description' => 'Our companion scanners enable you to easily implement laser scanning where either mobility or cost and size of other scanning devices is more difficult.',
                'slug' => 'companion-scanners',
                'published' => 1,
                'created_at' => '2020-07-27 19:23:42',
                'updated_at' => '2020-07-27 19:23:42',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Direct Part Marking',
                'description' => NULL,
                'slug' => 'direct-part-marking',
                'published' => 1,
                'created_at' => '2020-07-27 22:20:38',
                'updated_at' => '2020-07-27 22:20:38',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Extra High Density',
                'description' => NULL,
                'slug' => 'extra-high-density',
                'published' => 1,
                'created_at' => '2020-07-27 22:50:19',
                'updated_at' => '2020-07-27 22:50:19',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Scan Engine',
                'description' => NULL,
                'slug' => 'scan-engine',
                'published' => 1,
                'created_at' => '2020-07-27 23:20:54',
                'updated_at' => '2020-07-27 23:20:54',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Aggressive Barcode Reader',
                'description' => NULL,
                'slug' => 'aggressive-barcode-reader',
                'published' => 1,
                'created_at' => '2020-07-27 23:26:51',
                'updated_at' => '2020-07-27 23:26:51',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Product Build Material',
                'description' => NULL,
                'slug' => 'product-build-material',
                'published' => 1,
                'created_at' => '2020-08-04 20:00:39',
                'updated_at' => '2020-08-04 20:00:58',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Barcode Scanner',
                'description' => NULL,
                'slug' => 'barcode-scanner',
                'published' => 1,
                'created_at' => '2020-08-04 20:01:18',
                'updated_at' => '2020-08-04 20:01:18',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Software SDK',
                'description' => NULL,
                'slug' => 'software-sdk',
                'published' => 1,
                'created_at' => '2020-08-04 20:03:44',
                'updated_at' => '2020-08-04 20:03:44',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Software App',
                'description' => NULL,
                'slug' => 'software-app',
                'published' => 1,
                'created_at' => '2020-08-04 20:04:52',
                'updated_at' => '2020-08-04 20:04:52',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Mobile Case & Battery',
                'description' => NULL,
                'slug' => 'mobile-case-battery',
                'published' => 1,
                'created_at' => '2020-08-04 20:14:32',
                'updated_at' => '2020-08-04 20:14:32',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
        ));
        
        
    }
}