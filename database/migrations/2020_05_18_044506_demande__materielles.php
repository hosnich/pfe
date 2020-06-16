<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DemandeMaterielles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Demande_Materielles', function (Blueprint $table) {
            $table->id();
            $table->String('idFormateur');
            $table->String('idFormation');
            $table->String('typeSalle');
            $table->String('Materielles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Demande_Materielle');
    }
}
