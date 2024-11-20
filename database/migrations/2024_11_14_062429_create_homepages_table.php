<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('judul');      // Kolom untuk judul
            $table->longText('desc');         // Kolom untuk deskripsi
            $table->string('image')->nullable(); // Pastikan kolom image bisa null
            $table->timestamps();         // Kolom untuk timestamps (created_at dan updated_at)
        });
    }

    public function down()
    {
        Schema::dropIfExists('homepages');
    }
};
