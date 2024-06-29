<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValuesTable extends Migration
{
    public function up()
    {
        Schema::create('values', function (Blueprint $table) {
            $table->id();
            $table->integer('idPasien');
            $table->integer('tpm')->nullable();
            $table->decimal('kapasitas')->nullable();
            $table->decimal('prediksi')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('values');
    }
}
