<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKartupelajarFotoToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
        $table->binary('baronas_kartupelajar1')->nullable()->after('baronas_email');
        $table->binary('baronas_kartupelajar2')->nullable()->after('baronas_kartupelajar1');
        $table->binary('baronas_kartupelajar3')->nullable()->after('baronas_kartupelajar2');
        $table->binary('baronas_foto1')->nullable()->after('baronas_kartupelajar3');
        $table->binary('baronas_foto2')->nullable()->after('baronas_foto1');
        $table->binary('baronas_foto3')->nullable()->after('baronas_foto2');
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
        $table->dropColumn('baronas_kartupelajar1');
        $table->dropColumn('baronas_kartupelajar2');
        $table->dropColumn('baronas_kartupelajar3');
        $table->dropColumn('baronas_foto1');
        $table->dropColumn('baronas_foto2');
        $table->dropColumn('baronas_foto3');

    });
    }
}
