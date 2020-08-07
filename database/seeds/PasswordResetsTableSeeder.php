<?php

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'kamon.walker@codecorp.com',
                'token' => '$2y$10$2KnsD8yPKEQsCxVMgO4UT.Sc1NXwyxBYfkATkzog3Kl2nNm3EEHUW',
                'created_at' => '2020-07-16 16:19:07',
            ),
        ));
        
        
    }
}