<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNamaanggota3BaronasemailToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
        $table->string('namaanggota3')->nullable()->after('kelasanggota2');
        $table->string('baronas_email')->nullable()->after('baronas_bukti');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
        $table->dropColumn('namaanggota3');
        $table->dropColumn('baronas_email');
    });
    }
}
