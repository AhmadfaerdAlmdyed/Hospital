<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name'=>'create-hospital','guard_name'=>'admin']);
        Permission::create(['name' => 'update-hospital', 'guard_name' => 'admin']);
        Permission::create(['name' => 'index-hospitals', 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete-hospital', 'guard_name' => 'admin']);

        Permission::create(['name' => 'create-major', 'guard_name' => 'admin']);
        Permission::create(['name' => 'update-major', 'guard_name' => 'admin']);
        Permission::create(['name' => 'index-majors', 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete-major', 'guard_name' => 'admin']);

        Permission::create(['name' => 'create-doctor', 'guard_name' => 'admin']);
        Permission::create(['name' => 'update-doctor', 'guard_name' => 'admin']);
        Permission::create(['name' => 'index-doctors', 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete-doctor', 'guard_name' => 'admin']);

        Permission::create(['name' => 'create-admin', 'guard_name' => 'admin']);
        Permission::create(['name' => 'update-admin', 'guard_name' => 'admin']);
        Permission::create(['name' => 'index-admins', 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete-admin', 'guard_name' => 'admin']);

        Permission::create(['name' => 'create-role', 'guard_name' => 'admin']);
        Permission::create(['name' => 'update-role', 'guard_name' => 'admin']);
        Permission::create(['name' => 'index-roles', 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete-role', 'guard_name' => 'admin']);

        Permission::create(['name' => 'create-permission', 'guard_name' => 'admin']);
        Permission::create(['name' => 'update-permission', 'guard_name' => 'admin']);
        Permission::create(['name' => 'index-permissions', 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete-permission', 'guard_name' => 'admin']);
    }
}
