<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Rolseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'blogger']);

        Permission::create(['name' => 'admin.index'])->syncRoles([$admin, $role2]);

        Permission::create(['name' => 'admin.categories.index'])->syncRoles([$admin, $role2]);;
        Permission::create(['name' => 'admin.categories.create'])->syncRoles([$admin]);;
        Permission::create(['name' => 'admin.categories.edit'])->syncRoles([$admin]);;
        Permission::create(['name' => 'admin.categories.destroy'])->syncRoles([$admin]);;

        Permission::create(['name' => 'admin.posts.index'])->syncRoles([$admin, $role2]);;
        Permission::create(['name' => 'admin.posts.create'])->syncRoles([$admin]);;
        Permission::create(['name' => 'admin.posts.edit'])->syncRoles([$admin]);;
        Permission::create(['name' => 'admin.posts.destroy'])->syncRoles([$admin]);;

        Permission::create(['name' => 'admin.tags.index'])->syncRoles([$admin, $role2]);;
        Permission::create(['name' => 'admin.tags.create'])->syncRoles([$admin]);;
        Permission::create(['name' => 'admin.tags.edit'])->syncRoles([$admin]);;
        Permission::create(['name' => 'admin.tags.destroy'])->syncRoles([$admin]);;
    }
}
