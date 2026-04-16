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
        //(id, user_id , objet_lot , amount,valider )
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('objet_lot')->constrained('objets')->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->boolean('valider')->default(false);
            $table->timestamps();
        });
    }

};
