<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->float('dimension');
            $table->float('length');
            $table->string('ID/OD');
            $table->foreignId('stativs_id')->constrained('stativs')->cascadeOnDelete();
            $table->string('inner_outer');
            $table->foreignId('stativs_rows')->constrained('stativs')->cascadeOnDelete();
            $table->foreignId('stativs_columns')->constrained('stativs')->cascadeOnDelete();
           

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
