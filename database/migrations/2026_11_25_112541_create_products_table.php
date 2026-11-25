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
        Schema::create('products', function (Blueprint $table) {
       #$table->id(); $table->bigIncrements();
            ##$table->bigIncrements('id');
            $table->increments('id'); // - любое имя для поля
            $table->string('name'); // VARCHAR - без ограничения (255)
            $table->string('email', 100) ->unique(); // VARCHAR - ограничение 100; unique - уникальное значение записи
            $table->date('published_at'); // YY-MM-DD
            $table->dateTime('starts_at'); // YY-MM-DD + time
            #$table->dateTimeTz('starts_at'); // YY-MM-DD + time с часовым поясом
            $table->timestamp('created_at'); // YY-MM-DD + time с часовым поясом
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
