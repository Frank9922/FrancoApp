<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Categorias extends Component
{

    use WithPagination;

    public $perpage, $nombre;

    public function mount(){
        $this->perpage= 2;
    }

    public function render()
    {
        $categorias= DB::table('categorias')->where('descripcion', 'like', '%'.$this->nombre.'%')->paginate($this->perpage);

        return view('livewire.categorias', ['categorias' => $categorias]);
    }
}
