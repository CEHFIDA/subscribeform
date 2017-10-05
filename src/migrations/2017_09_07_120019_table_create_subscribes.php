<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableCreateSubscribes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('subscribes')) {
            Schema::create('subscribes', function (Blueprint $table) {
                $table->increments('id')->first();
                $table->string('email');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::dropIfExists('subscribes');
    }
}
