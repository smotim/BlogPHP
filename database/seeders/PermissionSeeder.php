<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manageUser = new Permission();
        $manageUser->name = 'Manage Users';
        $manageUser->slug = 'manage-users';
        $manageUser->save();

        $manageRole = new Permission();
        $manageRole->name = 'Manage Roles';
        $manageRole->slug = 'manage-roles';
        $manageRole->save();
    }
}
