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
        Schema::create('statistics_weekly', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_count');
            $table->text('most_requested_services');
            $table->enum('type', ['classic', 'real', 'mobile']);
            $table->unsignedBigInteger('ssip_id');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->timestamps();
        });

        Schema::create('statistics_daily', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_count');
            $table->unsignedBigInteger('wait_time_avg');
            $table->unsignedBigInteger('wait_time_max');
            $table->unsignedBigInteger('transaction_time');
            $table->unsignedBigInteger('ssip_id');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('date');
            $table->timestamps();
        });

        Schema::create('statistics_mobile', function (Blueprint $table) {            
            $table->id();
            $table->unsignedBigInteger('incoming_calls_count');
            $table->unsignedBigInteger('answered_calls_count');
            $table->unsignedBigInteger('missed_calls_count');
            $table->unsignedBigInteger('answered_calls_under_20_count');
            $table->unsignedBigInteger('online_chat_customer_count');
            $table->unsignedBigInteger('ssip_id');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('date');
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
        Schema::dropIfExists('statistics_weekly');
        Schema::dropIfExists('statistics_daily');
        Schema::dropIfExists('statistics_mobile');
    }
};
