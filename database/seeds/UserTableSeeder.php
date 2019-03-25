<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_gerente = Role::where('name', 'gerente')->first();
        $role_promotor = Role::where('name', 'promotor')->first();
        $role_prestador = Role::where('name', 'prestador')->first();
        $role_community = Role::where('name', 'community')->first();

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Gerente';
        $user->email = 'gerente@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_gerente);

        $user = new User();
        $user->name = 'Promotor';
        $user->email = 'promotor@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_promotor);

        $user = new User();
        $user->name = 'Prestador';
        $user->email = 'prestador@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_prestador);

        $user = new User();
        $user->name = 'Community';
        $user->email = 'community@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_community);
     }
}
