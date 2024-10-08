<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $username = "test user";
    public function CreateNewUser(){
        User::create([
            'name' => "test user 3",
            'email' => "test@gmail3.com",
            'password' => "1234567899"
        ]);
    }

    public function render()
    {
        $title="test";
        $users=User::all();
        return view('livewire.clicker',[
            'title' => $title,
            'users' => $users
        ]);
    }
}
