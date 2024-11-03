<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartemenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_M', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Kolom nama departemen
            $table->text('description')->nullable(); // Kolom deskripsi departemen, bisa kosong
            $table->unsignedBigInteger('jabatan_id')->nullable(); // Kolom ID manager departemen (FK)

            // Menambahkan foreign key constraint
            $table->foreign('jabatan_id')->references('id')->on('jabatan_M')->onDelete('set null'); // Mengatur relasi dengan tabel pegawai

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
        Schema::dropIfExists('department_M');
    }
}
