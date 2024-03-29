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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
          //  $table->unsignedBigInteger('reader_id');
            $table->integer('amount');
            $table->string('status');
            $table->string('interval');
            $table->string('planName')->nullable();
            $table->integer('planCode')->nullable();
            $table->string('CustomerEmail')->nullable();
            $table->string('subscriptionCode')->nullable();
            $table->timestamp('ends_at')->nullable();
            $table->string('authCode');
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
        Schema::dropIfExists('subscriptions');
    }
};
