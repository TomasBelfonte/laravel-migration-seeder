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
        Schema::table('trains', function (Blueprint $table) {
            $table->string("Azienda");
            $table->string("Stazione di Partenza");
            $table->string("Stazione di Arrivo");
            $table->dateTime("Orario di Partenza");
            $table->dateTime("Orario di Arrivo");
            $table->string("Codice Treno")->nullable()->default("CB0000");
            $table->tinyInteger("Numero Carrozze")->nullable();
            $table->boolean("In Orario");
            $table->boolean("Cancellato");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn("Azienda");
            $table->dropColumn("Stazione di Partenza");
            $table->dropColumn("Stazione di Arrivo");
            $table->dropColumn("Orario di Partenza");
            $table->dropColumn("Orario di Arrivo");
            $table->dropColumn("Codice Treno");
            $table->dropColumn("Numero Carrozze");
            $table->dropColumn("In Orario");
            $table->dropColumn("Cancellato");
        });
    }
};
