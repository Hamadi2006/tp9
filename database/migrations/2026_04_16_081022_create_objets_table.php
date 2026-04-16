<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //objets (lot, titre, description, prix_min, prix_max, date_fermeture, date_enchere,valider, user_id,departement_id,ville_id,type_vente_id)
        Schema::create('objets', function (Blueprint $table) {
            $table->id();
            $table->string('lot');
            $table->string('titre');
            $table->text('description');
            $table->decimal('prix_min', 10, 2);
            $table->decimal('prix_max', 10, 2);
            $table->date('date_fermeture');
            $table->date('date_enchere');
            $table->boolean('valider')->default(false);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('departement_id')->constrained()->onDelete('cascade');
            $table->foreignId('ville_id')->constrained()->onDelete('cascade');
            $table->foreignId('type_vente_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }
};
