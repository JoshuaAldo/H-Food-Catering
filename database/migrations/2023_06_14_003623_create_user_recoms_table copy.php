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
        Schema::create('user_recoms', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->float('weight'); 
            $table->float('height');
            $table->string('gender');
            $table->float('activity_level');
            $table->float('kalori')->nullable();
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
        Schema::dropIfExists('user_recoms');
    }
};
