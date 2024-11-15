<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria_id',
    ];

    public function categoria()
    {
        return $this->belongsTo(ProductoCategoria::class, 'categoria_id');
    }


    public function trabajador()
    {
        return $this->belongsTo(Trabajador::class);
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

    


}
