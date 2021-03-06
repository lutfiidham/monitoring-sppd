<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPelangganRelationToPekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pekerjaan', function (Blueprint $table) {
            $table->unsignedBigInteger('pelanggan_id')->after('id');
            $table->foreign('pelanggan_id')->references('id')->on('pelanggan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pekerjaan', function (Blueprint $table) {
            $table->dropForeign(['pelanggan_id']);
            $table->dropColumn(['pelanggan_id']);
        });
    }
}
