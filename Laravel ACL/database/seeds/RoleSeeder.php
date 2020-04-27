<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        $role = new App\Role;
        $role->name = "test";
        $role->save();

        $role = new App\Role;
        $role->name = "test2";
        $role->save();
    }
}
