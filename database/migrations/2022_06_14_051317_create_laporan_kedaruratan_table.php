<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanKedaruratanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_kedaruratan', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id');
            $table->string('latitude', 20);
            $table->string('longitude', 20);
            $table->string('information')->nullable();
            $table->bigInteger('status');

            $table->softDeletes();

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
        Schema::dropIfExists('laporan_kedaruratan');
    }
}
