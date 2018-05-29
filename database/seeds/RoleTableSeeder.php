<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();

        $editor = new Role();
        $editor->name         = 'editor';
        $editor->display_name = 'Editor'; // optional
        $editor->description  = 'Editor Group'; // optional
        $editor->save();
    }
}
