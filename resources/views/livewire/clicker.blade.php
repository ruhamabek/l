<div>
    {{-- Be like water. --}}
    <h2>{{ $username }}</h2>
    <h1>{{ $title}}</h1>
    {{ count($users) }}
    <br>
    <button wire:click=" CreateNewUser" style=" background-color: blue; color: white; padding: 10px 20px; border: none; border-radius: 5px; margin: 20px;">
        Create new user
    </button>
    </div>
