<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();

        $role = new Role();
        $role->name = 'user';
        $role->description = 'User';
        $role->save();

        $role = new Role();
        $role->name = 'gerente';
        $role->description = 'Gerente';
        $role->save();

        $role = new Role();
        $role->name = 'promotor';
        $role->description = 'Promotor';
        $role->save();

        $role = new Role();
        $role->name = 'prestador';
        $role->description = 'Prestador';
        $role->save();

        $role = new Role();
        $role->name = 'community';
        $role->description = 'Community';
        $role->save();
    }
}
