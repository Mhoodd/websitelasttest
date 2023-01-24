<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_has_permissions')->delete();
        
        \DB::table('role_has_permissions')->insert(array (
            0 => 
            array (
                'permission_id' => 4,
                'role_id' => 2,
            ),
            1 => 
            array (
                'permission_id' => 5,
                'role_id' => 2,
            ),
            2 => 
            array (
                'permission_id' => 5,
                'role_id' => 4,
            ),
            3 => 
            array (
                'permission_id' => 6,
                'role_id' => 2,
            ),
            4 => 
            array (
                'permission_id' => 6,
                'role_id' => 3,
            ),
        ));
        
        
    }
}