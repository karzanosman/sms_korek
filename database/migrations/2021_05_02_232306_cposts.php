<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cposts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cposts', function (Blueprint $table) {
            $table->id();
            $table->string("sms_title");
            $table->string("offer_name");
            $table->text("sms_content");
            $table->integer("status");
            $table->string("languages");
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
        Schema::dropIfExists('cposts');
    }
}
