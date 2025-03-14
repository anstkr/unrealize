<?php

namespace App\Http\Controllers;

use App\Models\User;

class FollowerController extends Controller
{
    public function follow(User $user) {
        $follower = auth()->user();

        $follower->followings()->attach($user);

        return redirect()->back();
    }

    public function unfollow(User $user) {
        $follower = auth()->user();

        $follower->followings()->detach($user);

        return redirect()->back();
    }
}
