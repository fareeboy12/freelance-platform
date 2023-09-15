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
        Schema::table('users', function (Blueprint $table) {
            // Remove the 'name' column
            $table->dropColumn('name');
            
            // Add new 'first_name' and 'last_name' columns
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            
            // Add a 'user_type' column
            $table->string('user_type')->after('last_name');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
