<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            // $table->id();
            $table->char('nim', 11);
            $table->primary('nim');
            $table->string('kode_kelas', 15);
            $table->string('nama_mahasiswa');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->enum('jk', ['L', 'P']);
            $table->string('alamat', 250);
            $table->char('no_hp', 14);
            $table->string('foto');
            $table->softDeletesTz($column = 'deleted_at', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
