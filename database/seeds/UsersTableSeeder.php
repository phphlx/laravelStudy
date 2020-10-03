<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class)->times(50)->create();

        $user = \App\Models\User::first();
        $user->name = 'phphlx';
        $user->email = 'phphlx@163.com';
        $user->is_admin = true;
        $user->save();
    }
}
