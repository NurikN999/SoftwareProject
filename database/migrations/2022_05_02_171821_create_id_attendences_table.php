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
        Schema::create('id_attendences', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('user_id');
            $table->integer('overtime');
            $table->date('day');
            $table->time('punch_in');
            $table->time('punch_out');
            $table->integer('production');
            $table->integer('break');
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
        Schema::dropIfExists('id_attendences');
    }
};
