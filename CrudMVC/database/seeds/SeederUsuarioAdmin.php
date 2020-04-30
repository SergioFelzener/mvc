<?php

use Illuminate\Database\Seeder;

use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SeederUsuarioAdmin extends Seeder
{
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'user@master.com',
            'password' => bcrypt('12345678')
        ]);

        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
