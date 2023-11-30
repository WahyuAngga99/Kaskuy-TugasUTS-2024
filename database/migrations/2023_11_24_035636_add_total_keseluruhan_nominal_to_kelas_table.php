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
        Schema::table('kelas', function (Blueprint $table) {
            $table->decimal('totalKeseluruhanNominal', 10, 2)->default(0); // Menambah kolom totalKeseluruhanNominal
        });
    }

    public function down()
    {
        Schema::table('kelas', function (Blueprint $table) {
            $table->dropColumn('totalKeseluruhanNominal'); // Rollback jika diperlukan
        });
    }

};
