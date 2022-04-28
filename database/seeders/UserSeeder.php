<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('slug','admin')->first();
        $reader = Role::where('slug', 'reader')->first();
        $manageUsers = Permission::where('slug','manage-users')->first();
        $manageRoles = Permission::where('slug','manage-roles')->first();

        $user1 = new User();
        $user1->name = 'Смолин Тимофей';
        $user1->email = 'admin@gmail.com';
        $user1->password = bcrypt('123');
        $user1->save();
        $user1->roles()->attach($admin);
        $user1->permissions()->attach($manageUsers);
        $user1->permissions()->attach($manageRoles);

        $user2 = new User();
        $user2->name = 'Максим Логвинов';
        $user2->email = 'max@gmail.com';
        $user2->password = bcrypt('456');
        $user2->save();
        $user2->roles()->attach($reader);
        $user2->permissions()->attach($manageUsers);
    }
}
