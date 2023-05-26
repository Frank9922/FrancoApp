<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table='productos';


    protected $fillable = [
        'nombre', 'precio', 'stock', 'id_categoria', 'updated_at', 'created_at'
    ];


    public function categorias(){
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public function etiquetas(){
        return $this->belongsToMany(Etiqueta::class, 'id_etiqueta');
    }
}