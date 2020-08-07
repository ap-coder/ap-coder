<?php

use Illuminate\Database\Seeder;

class SoftwareTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('software')->delete();
        
        \DB::table('software')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'CortexTools2',
                'software_version' => '1.4.3.18',
                'published' => 1,
                'slug' => 'cortextools2',
                'description' => NULL,
                'created_at' => '2020-06-25 22:10:31',
                'updated_at' => '2020-07-06 23:27:49',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'CortexOPOS',
                'software_version' => '5.0.0',
                'published' => 1,
                'slug' => 'cortexopos',
                'description' => NULL,
                'created_at' => '2020-06-25 22:11:30',
                'updated_at' => '2020-07-06 23:27:37',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'JavaScript Reader SDK',
                'software_version' => NULL,
                'published' => 1,
                'slug' => 'javascript-reader-sdk',
                'description' => NULL,
                'created_at' => '2020-06-25 22:12:13',
                'updated_at' => '2020-07-06 23:27:23',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
            'name' => 'CortexJPOS Windows (32-bit Operating Systems)',
                'software_version' => '6.0.0',
                'published' => 1,
                'slug' => 'cortexjpos-windows-32-bit-operating-systems',
                'description' => NULL,
                'created_at' => '2020-06-25 22:12:57',
                'updated_at' => '2020-07-06 23:27:10',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
            'name' => 'CortexJPOS Windows (64-bit Operating Systems)',
                'software_version' => '6.0.0',
                'published' => 1,
                'slug' => 'cortexjpos-windows-64-bit-operating-systems',
                'description' => NULL,
                'created_at' => '2020-06-25 22:13:53',
                'updated_at' => '2020-07-06 23:26:27',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
            'name' => 'CortexJPOS Linux (32-bit Operating Systems)',
                'software_version' => '5.4.0',
                'published' => 1,
                'slug' => 'cortexjpos-linux-32-bit-operating-systems',
                'description' => NULL,
                'created_at' => '2020-06-25 22:14:44',
                'updated_at' => '2020-07-06 23:26:53',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
            'name' => 'CortexJPOS Linux (64-bit Operating Systems)',
                'software_version' => '5.4.0',
                'published' => 1,
                'slug' => 'cortexjpos-linux-64-bit-operating-systems',
                'description' => NULL,
                'created_at' => '2020-06-25 22:15:18',
                'updated_at' => '2020-07-06 23:26:45',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
            'name' => 'USB Virtual COM Driver (32-bit and 64-bit Operating Systems)',
                'software_version' => '2.4.2',
                'published' => 1,
                'slug' => 'usb-virtual-com-driver-32-bit-and-64-bit-operating-systems',
                'description' => NULL,
                'created_at' => '2020-06-25 22:15:58',
                'updated_at' => '2020-07-06 20:23:43',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'CortexWedge',
                'software_version' => '2.3.0',
                'published' => 1,
                'slug' => 'cortexwedge',
                'description' => NULL,
                'created_at' => '2020-07-09 22:35:25',
                'updated_at' => '2020-07-09 22:36:38',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
        ));
        
        
    }
}