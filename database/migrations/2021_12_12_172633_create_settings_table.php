<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->string('site_title')->nullable();
            $table->string('site_logo')->nullable();
            $table->string('logo_path')->nullable();
            $table->string('site_url')->nullable();
            $table->string('Paypal-key')->nullable();
            $table->string('stirpe-key')->nullable();
            $table->string('stirpe-secret-key')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('facebooK')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google')->nullable();
            $table->string('video_name')->nullable();
            $table->string('video_path')->nullable();
            $table->string('dow')->nullable();
            $table->enum('Payment-mt', ['Stripe', 'Paypal'])->default('Stripe');
            $table->enum('status', ['opened', 'closed'])->default('opened');
            $table->string('start_time')->nullable();
            $table->string('close_time')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
