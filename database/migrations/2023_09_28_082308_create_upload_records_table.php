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
        Schema::create('upload_records', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fathername');
            $table->string('Phonenumber');
            $table->string('email');
            $table->string('adress');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upload_records');
    }
};
