<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panier_produit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('panier_id');
            $table->foreign('panier_id')
                ->references('id')
                ->on('paniers')->onDelete('cascade');

            $table->unsignedBigInteger('produit_id')->unsigned();
            $table->foreign('produit_id')
                ->references('id')
                ->on('produits')->onDelete('cascade');

            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panier_produit');
    }
};
