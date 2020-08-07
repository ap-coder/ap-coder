<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locations')->delete();
        
        \DB::table('locations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nickname' => 'Salt Lake City, UT, USA',
                'address' => '434 West Ascension Wa',
                'address_2' => 'Suite 300',
                'city' => 'Murray',
                'state' => 'UT',
                'zipcode' => '84123',
            'phone' => '(801) 495-2200',
                'phone_2' => NULL,
                'slug' => NULL,
                'full_address' => '434 West Ascension Way | Suite 300 | Murray, UT  84123',
                'created_at' => '2020-04-01 00:26:39',
                'updated_at' => '2020-06-17 19:04:57',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nickname' => 'Boston, MA, USA',
                'address' => '43 Nagog Park | Suite 215 | MA 01720',
                'address_2' => 'Suite 215',
                'city' => 'Acton',
                'state' => 'MA',
                'zipcode' => '01720',
            'phone' => '(801) 495-2200',
                'phone_2' => NULL,
                'slug' => NULL,
                'full_address' => '43 Nagog Park | Suite 215 | Acton MA 01720',
                'created_at' => '2020-06-17 19:03:37',
                'updated_at' => '2020-06-17 19:05:14',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nickname' => 'Bodegraven, The Netherlands',
                'address' => 'Tolnasingel 1 2411 PV',
                'address_2' => NULL,
                'city' => 'Bodegraven',
                'state' => 'Netherlands',
                'zipcode' => NULL,
                'phone' => '+31-172636867',
                'phone_2' => NULL,
                'slug' => NULL,
                'full_address' => 'Tolnasingel 1 2411 PV | Bodegraven The Netherlands',
                'created_at' => '2020-06-17 19:06:14',
                'updated_at' => '2020-06-17 19:06:14',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}