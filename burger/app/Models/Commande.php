<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'user_id',
        'date',
        'etat',
        'prix',
        'extraInfo'
    ];

    public function user()  {
        return $this->belongsTo(User::class);
    }

    public function produits()
    {
        return $this->belongsToMany(Produit::class)
            ->withPivot('quantity', 'prixTotal')
            ->withTimestamps();;
    }
}
