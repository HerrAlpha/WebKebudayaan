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
        Schema::create('islands', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('pulau');
            // Island Image named 'Pulau'
            $table->string('pulau_img');
            $table->string('legenda');
            // Island Image named 'Legenda'
            $table->string('legenda_img');
            $table->string('tari');
            // Island Image named 'Tari'
            $table->string('tari_img');
            $table->string('lagu');
            // Video named 'Lagu'
            $table->string('lagu_vid');
            $table->string('budaya_unik');
            // Island Image named 'Budaya Unik'
            $table->string('budaya_unik_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pulaus');
    }
};
