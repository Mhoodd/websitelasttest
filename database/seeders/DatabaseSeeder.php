<?php

use Database\Seeders\PermissionSeeder;
use Database\Seeders\RolePermissionSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,
            UserSeeder::class,
            RolePermissionSeeder::class,
        ]);
        $this->call(RolesTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(AboutusinfoTableSeeder::class);
        $this->call(ContactusTableSeeder::class);
        $this->call(GeneralinfoTableSeeder::class);
        $this->call(NewsModelsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
    }
}
