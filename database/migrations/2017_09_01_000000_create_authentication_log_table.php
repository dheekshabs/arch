<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthenticationLogTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('authentication_log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->default('-');
            $table->morphs('authenticatable');
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamp('login_at')->nullable();
            $table->timestamp('logout_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('authentication_log');
    }
}
