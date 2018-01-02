<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBaronasToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
        $table->string('baronas_kategori');
        $table->string('baronas_namatim');
        $table->string('baronas_namaanggota1');
        $table->string('baronas_namaanggota2');
        $table->string('baronas_namaanggota3');
        $table->string('baronas_namapembimbing');
        $table->string('baronas_asalsekolah');
        $table->string('baronas_alamatsekolah');
        $table->string('baronas_contactperson');
        $table->binary('baronas_foto');
        $table->binary('baronas_kartupelajar');
    });

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
        $table->dropColumn('baronas_kategori');
        $table->dropColumn('baronas_namatim');
        $table->dropColumn('baronas_namaanggota1');
        $table->dropColumn('baronas_namaanggota2');
        $table->dropColumn('baronas_namaanggota3');
        $table->dropColumn('baronas_namapembimbing');
        $table->dropColumn('baronas_asalsekolah');
        $table->dropColumn('baronas_alamatsekolah');
        $table->dropColumn('baronas_contactperson');
        $table->dropColumn('baronas_kartupelajar');
        $table->dropColumn('baronas_foto');
    }
}