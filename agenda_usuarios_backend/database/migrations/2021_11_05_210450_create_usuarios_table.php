<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('ced')->primary();
            $table->string('nom');
            $table->string('num');
            $table->string('cor');
            $table->string('dir');
            $table->date('fec_nac');
            $table->string('fot_per');
            $table->timestamps();
        });
        // DB::statement("ALTER TABLE usuarios ADD fot_per LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
