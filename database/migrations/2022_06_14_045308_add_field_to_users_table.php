<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('roles')->after('email');
            $table->string('phone', 13)->after('email');
            $table->string('jenis_kelamin', 10)->after('email');
            $table->date('tgl_lahir')->after('email');
            $table->string('no_identitas')->after('email')->unique();
            $table->bigInteger('jenis_identitas')->after('email');
            $table->string('nik', 20)->after('email')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('roles');
            $table->dropColumn('phone');
            $table->dropColumn('jenis_kelamin');
            $table->dropColumn('no_anggota');
            $table->dropColumn('keanggotaan');
            $table->dropColumn('nik');
        });
    }
}
