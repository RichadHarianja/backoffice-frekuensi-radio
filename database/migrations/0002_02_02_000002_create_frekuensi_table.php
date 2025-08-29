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
            $table->double('frekuensi');
            $table->double('bandwith');
            $table->char('type', 255);
            $table->string('service');
            $table->bigInteger('power');
            $table->string('location');
            $table->string('unit');
            $table->char('status', 255);
            $table->string('type_code');
            // $table->integer('divisi_code');
            // $table->unsignedInteger('divisi_code')->constrained()->onDelete('cascade'); // Foreign key
            $table->foreignId('divisi_code')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
