<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Category extends Model {
        use HasFactory;

        protected $fillable = ['designation'];

        /**
         * @description get all produits for the category
         */
        public function produits() {
            return $this->hasMany(Produit::class);
        }
    }
