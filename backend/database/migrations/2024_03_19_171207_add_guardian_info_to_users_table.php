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
        Schema::table('users', function (Blueprint $table) {
            // Add guardian-related columns
            $table->string('guardian_name')->nullable();
            $table->string('guardian_lastname')->nullable();
            $table->string('guardian_email')->nullable();
            
            // Add birthdate column (if it doesn't exist)
            if (!Schema::hasColumn('users', 'birthdate')) {
                $table->date('birthdate')->nullable();

            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('guardian_name');
            $table->dropColumn('guardian_lastname');
            $table->dropColumn('guardian_email');
            // Note: Do not drop the birthdate column in the down method
        });
    }
};
