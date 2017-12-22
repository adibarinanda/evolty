<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namatim');
            $table->integer('status')->default(0);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('asalsekolah');
            $table->string('alamatsekolah');
            $table->string('namaketua');
            $table->string('kelasketua');
            $table->string('namaanggota1');
            $table->string('kelasanggota1');
            $table->string('namaanggota2');
            $table->string('kelasanggota2');
            $table->string('event');
            $table->string('notelp');
            $table->binary('bukti');
            $table->string('region');
            $table->string('tipetes');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
