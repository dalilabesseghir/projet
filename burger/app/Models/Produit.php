<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Produit extends Model {
        use HasFactory;


        /**
         * @description get the category for the produit.
         */
        public function category()  {
            return $this->belongsTo(Category::class);
        }

        public function ingredients()
        {
            return $this->belongsToMany(Ingredient::class);
        }

        public function paniers()
        {
            return $this->belongsToMany(Panier::class)
                ->withPivot('quantity')
                ->withTimestamps();;
        }

        public function commandes()
        {
            return $this->belongsToMany(Commande::class)
                ->withPivot('quantity', 'prixTotal')
                ->withTimestamps();
        }
    }
