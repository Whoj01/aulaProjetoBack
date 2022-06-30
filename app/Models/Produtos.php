<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;
    protected $filliable = ['nome', 'stock', 'preco'];
    
    public function produtosAsCategoria(){
        return $this->belongsTo('App\Models\Categoria');
    }
    
}
