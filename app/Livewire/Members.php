<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use WireUi\Traits\WireUiActions;

class Members extends Component
{
    use WireUiActions;

    public $userId;
    public $followers;
    public $following;

    public function follow($userId)
    {
        $user = User::findOrFail($userId);
        auth()->user()->following()->attach($user);

        $this->notification()->send([
            'icon' => 'info',
            'title' => 'You are now following ' . $user->name,
        ]);
    }

    public function unfollow($userId)
    {
        $user = User::findOrFail($userId);
        auth()->user()->following()->detach($user);

        $this->notification()->send([
            'icon' => 'info',
            'title' => 'You have unfollowed ' . $user->name,
        ]);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $members = User::all();
        return view('livewire.members', compact('members'));
    }
}
