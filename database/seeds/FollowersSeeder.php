<?php

use Illuminate\Database\Seeder;

class FollowersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::all();
        $user = $users->first();
        $user_id = $user->id;

        // 获取 除了 id 为 1 的所有用户
        $followers = $users->slice(1);
        $follower_ids = $followers->pluck('id')->toArray();

        // 1 号关注了 除了 1 号 之外的所有 user
        $user->follow($follower_ids);

        // 1 号之外的其他用户都关注了 1 号
        foreach ($followers as $user) {
            $user->follow($user_id);
        }
    }
}
