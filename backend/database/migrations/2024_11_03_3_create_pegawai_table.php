<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_M', function (Blueprint $table) {
            $table->id(); // primary key dengan tipe integer dan auto-increment
            $table->string('namaPegawai'); // kolom nama
            $table->string('email')->unique(); // kolom email dengan constraint unique
            $table->string('noTelepon')->nullable(); // kolom nomor telepon bisa kosong
            $table->text('alamat')->nullable(); // kolom alamat bisa kosong
            $table->string('foto')->nullable(); // kolom foto bisa kosong
            $table->date('tglLahir'); // kolom tanggal lahir
            $table->date('tglGabung'); // kolom tanggal bergabung
            $table->foreignId('jabatan_id')->constrained('jabatan_M'); // foreign key ke tabel jabatan_M
            $table->foreignId('departemen_id')->constrained('departemen_M'); // foreign key ke tabel departmen_M
            $table->timestamps(); // kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai_M');
    }
}
