<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = new Role;
        $role1->name = "admin";
        $role1->save();

        $role2 = new Role;
        $role2->name = "judge";
        $role2->save();

        $role3 = new Role;
        $role3->name = "member";
        $role3->save();

        $role4 = new Role;
        $role4->name = "player";
        $role4->save();

    }
}
