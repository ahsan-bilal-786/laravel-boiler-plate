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

        $doctor = new Role();
        $doctor->name         = 'doctor';
        $doctor->display_name = 'Doctor'; // optional
        $doctor->description  = 'User is the doctor of a given project'; // optional
        $doctor->save();

        $reception = new Role();
        $reception->name         = 'reception';
        $reception->display_name = 'reception'; // optional
        $reception->description  = 'User is the reception of a given project'; // optional
        $reception->save();

    }
}
