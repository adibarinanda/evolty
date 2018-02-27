<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
        $table->string('ns_nama')->nullable()->after('baronas_foto3');
        $table->string('ns_kampus')->nullable()->after('ns_nama');
        $table->string('ns_notelp')->nullable()->after('ns_kampus');
        $table->string('ns_line')->nullable()->after('ns_notelp');
        $table->binary('ns_bukti')->nullable()->after('ns_line');
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
        $table->dropColumn('ns_nama');
        $table->dropColumn('ns_kampus');
        $table->dropColumn('ns_notelp');
        $table->dropColumn('ns_line');
        $table->dropColumn('ns_bukti');
    });
    }
}
