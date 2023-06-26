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
        Schema::create('biografi', function (Blueprint $table) {
            $table->id();
            $table->string('namatokoh');
            $table->string('foto');
            $table->text('orientasi');
            $table->text('peristiwapenting');
            $table->text('riorientasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biografi');
    }
};
