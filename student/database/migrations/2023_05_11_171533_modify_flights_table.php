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
        Schema::table('flights', function (Blueprint $table) {
            $table->string('name', 50)->change();
            //$table->renameColumn('capitale_sociale', 'money');
            $table->text('description')->after('airline')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('flights', function (Blueprint $table) {
            $table->string('name')->change();
           // $table->renameColumn('money', 'capitale_sociale');
            $table->dropColumn('description');
        });
    }
};
