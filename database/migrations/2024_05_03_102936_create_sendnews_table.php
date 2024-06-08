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
        Schema::create('sendnews', function (Blueprint $table) {
            $table->id();
            $table->text('send_news_title');
            $table->text('send_news_details');
            $table->string('sendername');
            $table->string('senderemail');
            $table->string('senderimage');
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
        Schema::dropIfExists('sendnews');
    }
};
