<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Messages extends Component
{
    #[Validate('required|string')]
    public $message;

    public function sendMessage()
    {
        $this->validate();

        auth()->user()->messages()->create([
            'message' => $this->message,
        ]);

        $this->reset('message');
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $messages = Message::all();

        return view('livewire.messages', compact('messages'));
    }
}
