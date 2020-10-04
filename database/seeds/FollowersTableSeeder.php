<?php

use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::all();
        $firstUser = $users->first();

        $followers = $users->slice(1);
        $follower_ids = $followers->pluck('id')->toArray();

        $firstUser->follow($follower_ids);

        foreach ($followers as $follower) {
            $follower->follow($firstUser->id);
        }
    }
}
