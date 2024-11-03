<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJabatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatan_M', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Kolom nama jabatan
            $table->text('description')->nullable(); // Kolom deskripsi jabatan, bisa kosong
            $table->string('golongan_gaji')->nullable(); // Kolom golongan gaji posisi, bisa kosong
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jabatan_M');
    }
}
