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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'imanity.fefe@gmail.com',
            'password' => bcrypt('metukiringa'),
            'authority' => true
        ]);
    }
}
