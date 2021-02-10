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
        $role1->name = "superadmin";
        $role1->save();

        $role2 = new Role;
        $role2->name = "admin";
        $role2->save();

        $role3 = new Role;
        $role3->name = "siteadmin";
        $role3->save();

        $role4 = new Role;
        $role4->name = "dbadmin";
        $role4->save();

        $role5 = new Role;
        $role5->name = "judge";
        $role5->save();

        $role6 = new Role;
        $role6->name = "player";
        $role6->save();

        $role7 = new Role;
        $role7->name = "member";
        $role7->save();

    }
}
