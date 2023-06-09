<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;


class Relacion extends Component
{
    use WithPagination;

    public $query, $perpage, $search, $ascordesc,
            $cat, $openborrar, $opencrear,
            $confirmationdelete, $confirmationcreate, $product,
            $nombre, $precio, $stock, $idcat, $openedit, $confirmationedit, $ejemplo;

    public $rules= [
        'nombre' => 'required|min:4',
        'precio' =>'required|between:1, 10000',
        'stock' => 'required|between:1, 200',
    ];

    public function mount(){
        $this->perpage=10;
        $this->ascordesc="asc";
    }

    public function resetext(){
        $this->query="";
        $this->search="";
    }

    public function resetcat(){
        $this->cat="";
    }

    public function resetascordesc(){
        $this->ascordesc="asc";
    }

    public function search(){
        $this->gotoPage(1);
        $this->query=$this->search;

    }

    public function delete($id){
        $this->openborrar=true;
        $this->confirmationdelete=$id;
    }

    public function crear(){
        $this->opencrear=true;
    }

    public function submit(){
        $this->validate();

        //dd($this->nombre, $this->precio, $this->stock, $this->idcat);
        Producto::create([
            'nombre' => $this->nombre,
            'precio' => $this->precio,
            'stock' => $this->stock,
            'id_categoria' => $this->idcat,
            'created_at' => now(),
            'updated_at' => now()

        ]);
        $this->opencrear=0;

    }

    public function deleteconfirm(Producto $product){
        $product->delete();
        $this->openborrar=false;
    }

    public function edit(Producto $product){
        $this->openedit=true;
        $this->product=$product;

        //Asignamos los valores del product en los inputs
        $this->nombre=$product->nombre;
        $this->precio=$product->precio;
        $this->stock=$product->stock;
        $this->idcat=$product->id_categoria;
    }

    public function update(Producto $product){
        $product->nombre=$this->nombre;
        $product->precio=$this->precio;
        $product->stock=$this->stock;
        $product->id_categoria=$this->idcat;
    }

    public function render()
    {
        $productos = Producto::with('etiquetas', 'categorias')

        ->paginate(10);

        // $productos=DB::table('productos')
        //             ->select('productos.id', 'productos.nombre', 'productos.precio', 'productos.stock', 'categorias.descripcion')
        //             ->join('categorias', 'productos.id_categoria', '=', 'categorias.id')
        //             ->where(function($query)
        //             {
        //                 $query->where('productos.nombre', 'like', '%'.$this->query.'%')
        //                       ->Where('categorias.id', 'like', '%'.$this->cat.'%');
        //             })
        //             ->orderBy('productos.id', 'asc')
        //             ->paginate($this->perpage);


        $categorias=DB::table('categorias')->get();

        return view('livewire.relacion', ['productos' => $productos], ['categorias' => $categorias]);

    }

}
