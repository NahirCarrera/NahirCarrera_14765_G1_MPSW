<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductosPorOrden extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'productos_por_orden';
    public function getProducto($productoId){
        return Productos::where('id',decrypt($productoId))->first();
    }
}
