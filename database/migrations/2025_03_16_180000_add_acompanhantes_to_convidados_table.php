<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('convidados', function (Blueprint $table) {
            $table->integer('acompanhantes')->default(0)->after('confirmado');
        });
    }

    public function down(): void
    {
        Schema::table('convidados', function (Blueprint $table) {
            $table->dropColumn('acompanhantes');
        });
    }
}; 