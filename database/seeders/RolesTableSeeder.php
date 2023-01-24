<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'guard_name' => 'web',
                'created_at' => '2020-03-10 11:40:47',
                'updated_at' => '2020-03-10 11:40:47',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2020-03-10 12:39:23',
                'updated_at' => '2020-03-10 12:39:23',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Project Manager',
                'guard_name' => 'web',
                'created_at' => '2020-03-12 12:11:50',
                'updated_at' => '2020-03-12 12:11:50',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Sales Manager',
                'guard_name' => 'web',
                'created_at' => '2020-03-12 12:12:07',
                'updated_at' => '2020-03-12 12:12:07',
            ),
        ));
        
        
    }
}