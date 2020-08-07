<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staff')->delete();
        
        \DB::table('staff')->insert(array (
            0 => 
            array (
                'id' => 1,
                'startdate' => NULL,
                'name' => 'Garrett Russell',
                'job_title' => 'Americas VP of Sales & Global Marketing',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'garrett-russell',
                'linkedin_link' => 'https://www.linkedin.com/in/garrett-russell-8385211',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'Garrett.Russell@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-17 00:37:26',
                'updated_at' => '2020-08-03 17:47:53',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'startdate' => NULL,
                'name' => 'Joe Croce',
                'job_title' => 'Director of Sales, Americas',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'joe-croce',
                'linkedin_link' => 'https://www.linkedin.com/in/joe-croce-2a15763/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'Joe.Croce@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-17 00:42:12',
                'updated_at' => '2020-08-03 17:46:54',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'startdate' => NULL,
                'name' => 'Jen Vinson',
                'job_title' => 'Inside Sales',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'jen-vinson',
                'linkedin_link' => 'https://www.linkedin.com/in/jen-vinson-41b40720/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'Jen.Vinson@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-17 00:43:17',
                'updated_at' => '2020-08-03 17:46:16',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'startdate' => NULL,
                'name' => 'Christopher Koenen',
                'job_title' => 'Regional Account Manager',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'christopher-koenen',
                'linkedin_link' => 'https://www.linkedin.com/in/chris-koenen-b972377a/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'Christopher.Koenen@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-17 00:43:58',
                'updated_at' => '2020-08-03 17:45:34',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'startdate' => NULL,
                'name' => 'Jerry Lullo',
                'job_title' => 'Regional Account Manager',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'jerry-lullo',
                'linkedin_link' => 'https://www.linkedin.com/in/gerard-lullo-92b12966/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'Jerry.Lullo@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-17 00:44:47',
                'updated_at' => '2020-08-03 17:44:57',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'startdate' => NULL,
                'name' => 'Lorie DiCarlantonio',
                'job_title' => 'Sr. Regional Sales Manager',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'lorie-dicarlantonio',
                'linkedin_link' => 'https://www.linkedin.com/in/lorie-dicarlantonio-80997517/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'Lorie.DiCarlantonio@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-17 00:45:59',
                'updated_at' => '2020-08-03 17:44:24',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'startdate' => NULL,
                'name' => 'Kent Bandy',
                'job_title' => 'Regional Sales Manager',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'kent-bandy',
                'linkedin_link' => 'https://www.linkedin.com/in/kent-bandy-3253a12/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => NULL,
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-17 00:46:41',
                'updated_at' => '2020-06-22 21:41:27',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'startdate' => NULL,
                'name' => 'Holly Pryor',
                'job_title' => 'Regional Account Manager',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'holly-pryor',
                'linkedin_link' => 'https://www.linkedin.com/in/holly-pryor-24981412a/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'Holly.Pryor@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-17 00:48:21',
                'updated_at' => '2020-08-03 17:43:34',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'startdate' => NULL,
                'name' => 'Roberto Anderson',
                'job_title' => 'Regional Account Manager',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'roberto-anderson',
                'linkedin_link' => 'https://www.linkedin.com/in/roberto-anderson-7887535/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'Roberto.Anderson@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-17 00:49:01',
                'updated_at' => '2020-08-03 17:42:56',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'startdate' => NULL,
                'name' => 'Mark Steffen',
                'job_title' => 'Sr. Regional Account Manager',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'mark-steffen',
                'linkedin_link' => 'https://www.linkedin.com/in/mark-steffen-338a5b5/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'Mark.Steffen@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-17 00:49:52',
                'updated_at' => '2020-08-03 17:42:24',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'startdate' => NULL,
                'name' => 'Dave Judy',
                'job_title' => 'Sr. Regional Sales Manager',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'dave-judy',
                'linkedin_link' => 'https://www.linkedin.com/in/dave-judy-23623010/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'Dave.Judy@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-17 00:50:41',
                'updated_at' => '2020-08-03 17:41:49',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'startdate' => NULL,
                'name' => 'Osman Erturk',
                'job_title' => 'Sales Manager',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'osman-erturk',
                'linkedin_link' => 'https://www.linkedin.com/in/osman-erturk/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'Osman.Erturk@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-17 00:53:19',
                'updated_at' => '2020-08-03 17:41:03',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'startdate' => NULL,
                'name' => 'Thomas Rissmann',
                'job_title' => 'Software & OEM Sales Manager',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'thomas-rissmann',
                'linkedin_link' => 'https://www.linkedin.com/in/cortexdecoder/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'thomas.rissmann@tachyoniq.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-17 00:54:12',
                'updated_at' => '2020-08-03 17:40:30',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'startdate' => NULL,
                'name' => 'Bob Van Lare',
                'job_title' => 'EMEA Account Manager',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'bob-van-lare',
                'linkedin_link' => 'https://www.linkedin.com/in/bobvanlare/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'Bob.VanLare@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-17 00:54:48',
                'updated_at' => '2020-08-03 17:39:56',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'startdate' => NULL,
                'name' => 'Rene Van Mourik',
                'job_title' => 'VP Sales EMEA & APAC',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'rene-van-mourik',
                'linkedin_link' => 'https://www.linkedin.com/in/rene-van-mourik-ab02384/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'Rene.VanMourik@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-17 00:55:35',
                'updated_at' => '2020-08-03 17:38:59',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'startdate' => NULL,
                'name' => 'Emily Scales',
                'job_title' => 'Channel Marketing Manager',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'emily-scales',
                'linkedin_link' => 'https://www.linkedin.com/in/emily-scales-7278a19/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'emily.scales@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-22 22:04:41',
                'updated_at' => '2020-08-03 17:37:49',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'startdate' => NULL,
                'name' => 'Garry Lang',
                'job_title' => 'Channel Sales',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'garry-lang',
                'linkedin_link' => 'https://www.linkedin.com/in/garrylang/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'Garry.Lang@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-22 22:06:57',
                'updated_at' => '2020-08-03 17:37:24',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'startdate' => NULL,
                'name' => 'Michael Howell',
                'job_title' => 'Channel Sales',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'michael-howell',
                'linkedin_link' => 'https://www.linkedin.com/in/michaelthowell/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'michael.howell@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-22 22:09:02',
                'updated_at' => '2020-08-03 17:36:26',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'startdate' => NULL,
                'name' => 'Jeremy Ozias',
                'job_title' => 'Channel Sales',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'jeremy-ozias',
                'linkedin_link' => 'https://www.linkedin.com/in/jeremyozias/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'Jeremy.Ozias@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-22 22:11:14',
                'updated_at' => '2020-08-03 17:35:33',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'startdate' => NULL,
                'name' => 'Ryan Lee',
                'job_title' => 'Software & OEM Sales',
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'ryan-lee',
                'linkedin_link' => 'https://www.linkedin.com/in/ryanrlee00/',
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'ryan.lee@codecorp.com',
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 0,
                'created_at' => '2020-06-22 22:12:53',
                'updated_at' => '2020-08-03 17:34:24',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'startdate' => NULL,
                'name' => 'Kim Justesen',
                'job_title' => NULL,
                'short_intro' => 'Kim Justesen has more than 15 years’ experience in marketing, communications, and public relations. She has been with Code Corp since 2019. She earned her BA in Speech-Communications from Westminster College of Salt Lake City and her MFA in Creative Writing from Vermont College of Fine Arts. She is the author of five books for children, two for adults, and 12 short stories in a number of anthologies.',
                'bio' => NULL,
                'published' => 1,
                'slug' => 'kim-justesen',
                'linkedin_link' => NULL,
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => 'kim.justesen@codecorp.com',
                'gravatar' => 'kim.justesen@codecorp.com',
                'in_teams' => 0,
                'is_author' => 1,
                'created_at' => '2020-07-14 18:46:43',
                'updated_at' => '2020-07-17 20:56:26',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'startdate' => NULL,
                'name' => 'Leslie Titus Bryant',
                'job_title' => NULL,
                'short_intro' => NULL,
                'bio' => NULL,
                'published' => 1,
                'slug' => 'leslie-titus-bryant',
                'linkedin_link' => NULL,
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => NULL,
                'gravatar' => NULL,
                'in_teams' => 1,
                'is_author' => 1,
                'created_at' => '2020-07-17 17:48:28',
                'updated_at' => '2020-07-17 20:52:33',
                'deleted_at' => '2020-07-17 20:52:33',
            ),
            22 => 
            array (
                'id' => 23,
                'startdate' => NULL,
                'name' => 'Staff Writer',
                'job_title' => 'Staff Writer',
                'short_intro' => 'Many of the talented and qualified staff at Code Corporation contribute to our blog. Our team members add a unique perspective to our communications efforts, and we are fortunate to have such a great cadre of writers as part of our company.',
                'bio' => NULL,
                'published' => 1,
                'slug' => 'staff-writer',
                'linkedin_link' => NULL,
                'facebook_link' => NULL,
                'youtube_link' => NULL,
                'twitter_link' => NULL,
                'other_link' => NULL,
                'staff_email' => NULL,
                'gravatar' => NULL,
                'in_teams' => 0,
                'is_author' => 1,
                'created_at' => '2020-07-17 21:34:52',
                'updated_at' => '2020-07-17 21:43:19',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}