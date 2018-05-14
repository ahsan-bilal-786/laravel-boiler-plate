<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = DB::table('users')->insert([
				'name'   => 'admin',
				'email'      => 'admin@admin.com',
				'password'   => Hash::make('admin'),
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			]);
        $editor = DB::table('users')->insert([
				'name'   => 'editor',
				'email'      => 'user@editor.com',
				'password'   => Hash::make('editor'),
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			]);


    }
}
