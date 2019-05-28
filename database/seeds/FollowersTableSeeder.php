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
        $user = \App\Models\User::first();
        $user_id = $user->id;

        // 获取 ID 为 1 外的所有用户的 id 数组
        $followers = $users->slice(1);
        $follower_ids = $followers->pluck('id')->toArray();

        // 关注 所有用户
        $user->follow($follower_ids);

        // 除 1 之外的用户都关注 1
        foreach ($followers as $follower) {
            $follower->follow($user_id);
        }
    }
}
