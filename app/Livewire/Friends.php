<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Friends extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        $authUser = auth()->user();

        // Get mutual followers
        $mutualFollowers = User::whereHas('followers', function ($query) use ($authUser) {
            $query->where('follower_id', $authUser->id);
        })
            ->whereHas('following', function ($query) use ($authUser) {
                $query->where('following_id', $authUser->id);
            })
            ->pluck('id'); // Get IDs of mutual followers

        // Get followers excluding mutual followers
        $followers = $authUser->followers()
            ->whereNotIn('follower_id', $mutualFollowers)
            ->get();

        // Get following excluding mutual followers
        $followings = $authUser->following()
            ->whereNotIn('following_id', $mutualFollowers)
            ->get();

        // Fetch mutual followers
        $mutuals = User::whereIn('id', $mutualFollowers)->get();

        return view('livewire.friends', compact('followings', 'followers', 'mutuals'));
    }
}
