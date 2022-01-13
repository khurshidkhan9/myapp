<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('payee_name');
            $table->string('payee_email')->unique();
            $table->integer('payee_id')->unique();
            $table->string('payee_address')->nullable();
            $table->string('payer_name');
            $table->string('payer_email')->unique();
            $table->integer('payer_id')->unique();
            $table->string('payer_phone')->unique();
            $table->string('payer_address')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('amount')->unsigned();
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
        Schema::dropIfExists('donations');
    }
}
