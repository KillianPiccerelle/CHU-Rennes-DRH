<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaisonsFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raisons_formations', function (Blueprint $table) {
            $table->id();
            $table->text('raison');
            $table->unsignedBigInteger('formation_id');
            $table->foreign('formation_id')->references('id')->on('formulaire');
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
        Schema::dropIfExists('raisons_formations');
    }
}
