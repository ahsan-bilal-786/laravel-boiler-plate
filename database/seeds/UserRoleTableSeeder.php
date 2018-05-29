<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $adminRole = Role::where('name', '=', 'admin')->first();
        $adminUser = User::where('name', '=', 'admin')->first();
        $adminUser->attachRole($adminRole->id);
        
        $editorRole = Role::where('name', '=', 'editor')->first();
        $editorUser = User::where('name', '=', 'editor')->first();
        $editorUser->attachRole($editorRole->id);
        
    }
}
