<?php

namespace Database\Seeders;

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
                'name' => 'Super Admin',
                'email' => 'admin@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uZDwEdgAzi3wD4n8oBYfruvBmZJqVV7sSasFRZzlz5Wkqs0EyqiDe',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-03-12 12:28:44',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Project Manager',
                'email' => 'pm@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rm0yp.fuqPZevIkxlActtuBpMuTHLGwPRYFaNlA5TToZZqx.i7Tra',
                'remember_token' => NULL,
                'created_at' => '2020-03-12 12:18:59',
                'updated_at' => '2020-03-12 12:18:59',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Sales Manager',
                'email' => 'sm@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$40lQm5lnWgtElBwnko7ASuUr.Obu2CI.hPecZ8ZciGsYKkXw2Kf3.',
                'remember_token' => NULL,
                'created_at' => '2020-03-12 12:20:15',
                'updated_at' => '2020-03-12 12:20:15',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'HR',
                'email' => 'hr@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sFgFRrOZS4mzhRlAHbDIie.Kz.G3YSIYynnmcljjxVzyl0gkMQT6a',
                'remember_token' => NULL,
                'created_at' => '2020-03-12 12:25:25',
                'updated_at' => '2020-03-12 12:25:25',
            ),
        ));
        
        
    }
}