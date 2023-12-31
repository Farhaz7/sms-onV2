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
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('surat_pengantar')->nullable();
            $table->string('surat_ahwa')->nullable();
            $table->string('ktp_meninggal')->nullable();
            $table->string('surat_tdk_mampu')->nullable();
            $table->string('ktp_ahwa')->nullable();
            $table->string('kk_meninggal')->nullable();
            $table->string('akte_meninggal')->nullable();
            $table->string('kk_ahwa')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('berkas');
    }
};
