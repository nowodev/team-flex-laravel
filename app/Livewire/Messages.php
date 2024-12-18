<?php

namespace App\Livewire;

use App\Events\MessageSent;
use App\Models\Message;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Messages extends Component
{
    #[Validate('required|string')]
    public $message;

    public function getListeners()
    {
        return [
            "echo:messages,MessageSent" => '$refresh',
        ];
    }

    public function sendMessage()
    {
        $this->validate();

        $msg = auth()->user()->messages()->create([
            'message' => $this->message,
        ]);

        broadcast(new MessageSent($msg));

        $this->reset('message');
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $messages = Message::all();

        return view('livewire.messages', compact('messages'));
    }
}
