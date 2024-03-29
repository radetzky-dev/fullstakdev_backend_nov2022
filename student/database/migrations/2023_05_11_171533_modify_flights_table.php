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
         //   $table->rename('capitale_sociale', 'money');
            $table->text('description')->after('airline')->nullable();
            $table->string('email')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('flights', function (Blueprint $table) {
            $table->string('name')->change();
           // $table->rename('capitale_sociale', 'fligths');
            $table->dropColumn('description');
            $table->dropColumn('email');
        });
    }
};
