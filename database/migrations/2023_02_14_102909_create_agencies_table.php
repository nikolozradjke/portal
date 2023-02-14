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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('agency_id')->unique();
            $table->string('city');
            $table->string('address');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('start_working_hour');
            $table->string('end_working_hour');
            $table->string('phone');
            $table->text('comment');
            $table->string('image');
            $table->string('responsible_person_name');
            $table->string('responsible_person_phone');
            $table->string('responsible_person_email');
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
        Schema::dropIfExists('agencies');
    }
};
