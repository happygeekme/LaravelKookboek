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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->boolean('validated')->default(0);
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('instructions');
            $table->text('note')->nullable();
            $table->integer('number_of_servings')->nullable();
            $table->date('updated_at');
            $table->date('created_at');
            $table->string('image')->nullable();
            $table->string('link')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
};
