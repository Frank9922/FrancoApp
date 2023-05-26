<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etiqueta_producto extends Model
{
    
    protected $fillable = [
        'id_producto', 'id_etiqueta'
    ];

    use HasFactory;
}
