<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->enum('marke', ['Volvo', 'VAZ', 'Mercedes', 'GAZ']);
            $table->integer('gamybos_metai');
            $table->string('savininko_vardas_pavarde', '64');
            $table->integer('savininku_skaicius')->nullable();
            $table->text('komentarai')->nullable();
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
        Schema::dropIfExists('trucks');
    }
}
