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
        Schema::create('f_radio', function (Blueprint $table) {
            $table->id();
            $table->float('frekuensi')->nullable(false);
            $table->float('bandwith')->nullable(false);
            $table->string('type')->nullable(false);
            $table->string('service')->nullable(false);
            $table->bigInteger('power')->nullable(false);
            $table->string('location')->nullable(false);
            $table->string('status')->nullable(false);
            $table->string('type_code')->nullable(false);
            $table->bigInteger('divisi_code')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f_radio');
    }
};
