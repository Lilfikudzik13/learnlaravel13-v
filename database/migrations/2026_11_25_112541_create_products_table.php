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
            #$table->id(); // bigIncrements -- по умолчанию поле будет id
            #$table->bigIncrements('id');
            $table->increments('id'); // - любое имя для поля
            $table->string('name'); // VARCHAR - без ограничения (255)
            $table->string('email', 100)->unique(); // VARCHAR - ограничение 100; unique - уникальное значение записи
            $table->date('published_at'); // YYYY-MM-DD
            $table->dateTime('starts_at'); // YYYY-MM-DD + время
            #$table->dateTimeTz('starts_at'); // YYYY-MM-DD + время с часовым поясом
            #$table->timestamp('created_at'); // метка времени (конфликтует с timestamps() ниже)
            #$table->timestampTz('created_at'); // метка времени с часовым поясом
            $table->timestamps(); // created_at + update_at
            #$table->timestampsTz(); // created_at + update_at с часовым поясом
            $table->boolean('is_active')->default(true); // true/false + по умолчанию true
            $table->decimal('price', 8, 2); // 100000.99
            $table->float('discount', 10, 6); // то же самое что и decimal, но хранит приближенное значение
            $table->json('settings')->nullable(); // создает json + по умолчанию {}
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
