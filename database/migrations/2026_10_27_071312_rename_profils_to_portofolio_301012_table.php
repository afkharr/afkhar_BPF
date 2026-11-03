<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Ini perintah untuk MENGUBAH NAMA tabel lama menjadi baru
        Schema::rename('profils', 'Portofolio_301012');
    }

    public function down(): void
    {
        // Ini untuk mengembalikan jika di-rollback
        Schema::rename('Portofolio_301012', 'profils');
    }
};
