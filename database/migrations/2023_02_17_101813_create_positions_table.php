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
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('structure_id');
            $table->string('title');
            $table->string('type');
            $table->string('salary');
            $table->string('currency');
            $table->string('salary_clean');
            $table->integer('quantity')->default(1);
            $table->text('description');
            $table->foreign('structure_id')->references('id')->on('structures')->onDelete('cascade');
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
        Schema::dropIfExists('positions');
    }
};
