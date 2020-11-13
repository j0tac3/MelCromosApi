<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNumeroSeccionJugadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jugadors', function (Blueprint $table) {
            $table->string('numero', 50)->nullable()->after('id');
            $table->string('seccion', 50)->nullable()->after('numero');
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jugadors', function (Blueprint $table) {
            $table->dropColumn('numero');
            $table->dropColumn('seccion');
        });
    }
}
