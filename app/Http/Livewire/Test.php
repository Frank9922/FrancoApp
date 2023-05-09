<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Test extends Component
{
    use WithPagination;
    public $team;


    public function render()
    {
        return view('livewire.test', [
            'users'=> User::paginate(10),

        ]);
    }
}
