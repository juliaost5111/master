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
        Schema::create('use', function (Blueprint $table) {
            $table->id();
            $table->string('Ima');
            $table->string('Familia');
            $table->date('DataRogdenia');
            $table->date('DataSozdania');
            $table->string('Email')->comment('Укажите почту');
            $table->decimal('salary', 10, 2)->default(0)->nullable();
            $table->integer('age')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('users');
    }
};
