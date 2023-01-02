<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecters', function (Blueprint $table) {
            $table->id();
            $table->string('childrenName', 100);
            $table->string('childrenSurname', 100);
            $table->string('adress', 150);
            $table->string('city', 100);
            $table->date('arrivalDate');
            $table->string('present', 350);
            $table->text('text')->nullable();
            $table->tinyInteger('rating');
            $table->boolean('consegned')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecters');
    }
};
