<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;

    public function produits()
    {
        return $this->belongsToMany(Produit::class)
            ->withPivot('quantity')
            ->withTimestamps();;
    }

    public function user()  {
        return $this->belongsTo(User::class);
    }
}
