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
            $table->string('name'); // kolom nama
            $table->string('email')->unique(); // kolom email dengan constraint unique
            $table->string('phone_number')->nullable(); // kolom nomor telepon bisa kosong
            $table->text('address')->nullable(); // kolom alamat bisa kosong
            $table->string('photos')->nullable(); // kolom foto bisa kosong
            $table->date('date_of_birth'); // kolom tanggal lahir
            $table->date('join_date'); // kolom tanggal bergabung
            $table->foreignId('jabatan_id')->constrained('jabatan_M'); // foreign key ke tabel jabatan_M
            $table->foreignId('departmen_id')->constrained('department_M'); // foreign key ke tabel departmen_M
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
