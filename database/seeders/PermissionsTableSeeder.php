<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'manage_role',
                'guard_name' => 'web',
                'created_at' => '2020-03-10 12:10:57',
                'updated_at' => '2020-03-10 12:10:57',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'manage_permission',
                'guard_name' => 'web',
                'created_at' => '2020-03-10 12:11:09',
                'updated_at' => '2020-03-10 12:11:09',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'manage_user',
                'guard_name' => 'web',
                'created_at' => '2020-03-10 12:11:41',
                'updated_at' => '2020-03-10 12:11:41',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'manage_sales',
                'guard_name' => 'web',
                'created_at' => '2020-03-12 09:46:39',
                'updated_at' => '2020-03-12 09:46:39',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'manage_projects',
                'guard_name' => 'web',
                'created_at' => '2020-03-12 09:46:54',
                'updated_at' => '2020-03-12 09:46:54',
            ),
        ));
        
        
    }
}