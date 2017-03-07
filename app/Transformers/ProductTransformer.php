<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class ProductTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Product $product)
    {
        return [
            'identificador' => (int)$user->id,
            'titulo' => (string)$user->name,
            'detalles' => (string)$user->description,
            'disponibles' => (string)$user->quantity,
            'estado' => (string)$user->status,
            'imagen' => url("img/{$user->image}"),
            'vendedor' => (int)$user->seller_id,
            'fechaCreacion' => (string)$user->created_at,
            'fechaActualizacion' => (string)$user->updated_at,
            'fechaEliminacion' => isset($user->updated_at) ? (string) $user->deleted_at : null,
        ];
    }
}
