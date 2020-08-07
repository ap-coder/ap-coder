<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3qb4/S7egm.xzIP3eZglYeVrLK2psOUAGDjIHz5XmlfNX6yOo4np2',
                'remember_token' => NULL,
                'verified' => 1,
                'verified_at' => '2020-03-25 00:33:25',
                'verification_token' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Phillip Madsen',
                'email' => 'phillip.madsen@codecorp.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iUXfnZe.Zj0QwMaBCRxeWObZDk1qjMRCW/d/KlrTsa4lfjsbTbFa2',
                'remember_token' => NULL,
                'verified' => 1,
                'verified_at' => '2020-06-15 19:30:07',
                'verification_token' => NULL,
                'created_at' => '2020-06-15 19:30:07',
                'updated_at' => '2020-06-15 19:30:07',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Sal Giani',
                'email' => 'sal.giani@codecorp.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OOYDL69eEGIctodrORIbnO4YgcP9uKBOJEwxYOz5WH60/.gxxJkmG',
                'remember_token' => '9ZelTndfUGIpSwS2PXyeoOSPbLKqmiUgqqlqxWpNurVCFFfhUe8ZfibUPDUc',
                'verified' => 1,
                'verified_at' => '2020-06-15 19:30:57',
                'verification_token' => NULL,
                'created_at' => '2020-06-15 19:30:57',
                'updated_at' => '2020-06-15 19:30:57',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mike Eddards',
                'email' => 'mike.eddards@codecorp.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8zLmSSO0LtWZhCI2ZeAJ8esRBC7x.57l02WtuvgJqDnKgPybPycZW',
                'remember_token' => NULL,
                'verified' => 1,
                'verified_at' => '2020-06-15 19:32:38',
                'verification_token' => NULL,
                'created_at' => '2020-06-15 19:32:38',
                'updated_at' => '2020-06-15 19:32:38',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Kamon Walker',
                'email' => 'kamon.walker@codecorp.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$t.QMlkw7Jpsm4u8bIZkH1.nFbdjX6zGYvJFeKIhFBSu5kDi0w3Jtq',
                'remember_token' => NULL,
                'verified' => 1,
                'verified_at' => '2020-06-15 19:34:22',
                'verification_token' => NULL,
                'created_at' => '2020-06-15 19:34:22',
                'updated_at' => '2020-06-15 19:34:22',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Doug Coates',
                'email' => 'doug.coates@codecorp.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gUq6cl63DSmcN/l8HROt9On1kpEtUC8MA8Yu0ESP7pcab8lf.SQsq',
                'remember_token' => NULL,
                'verified' => 1,
                'verified_at' => '2020-06-16 22:56:17',
                'verification_token' => NULL,
                'created_at' => '2020-06-16 22:56:17',
                'updated_at' => '2020-06-16 22:56:17',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Code Partner',
                'email' => 'partner@codecorp.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6ugyodEeprhZ.W3cFbhU0.Dx3t/s9sGwmQ2FCEn.OObDoh2n4SFHi',
                'remember_token' => NULL,
                'verified' => 1,
                'verified_at' => '2020-07-23 00:13:45',
                'verification_token' => NULL,
                'created_at' => '2020-07-23 00:13:45',
                'updated_at' => '2020-07-23 00:13:45',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Kim Justesen',
                'email' => 'kim.justesen@codecorp.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$q83ZY0pL2dz6ZqBQ2bYOBO0X24zzEJedRu779nFvSNl5QSC4COfpa',
                'remember_token' => NULL,
                'verified' => 1,
                'verified_at' => '2020-07-31 16:17:03',
                'verification_token' => NULL,
                'created_at' => '2020-07-31 16:17:03',
                'updated_at' => '2020-07-31 16:17:03',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}