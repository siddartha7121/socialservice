<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('whatsapp_number', 15);
            $table->string('alternate_number', 15)->nullable();
            $table->integer('location');
            $table->integer('blood_group');
            $table->integer('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('register');
    }
};
