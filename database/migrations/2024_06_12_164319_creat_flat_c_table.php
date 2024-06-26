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
        Schema::create('flatC', function (Blueprint $table) {
            $table->id();
            $table->string('flat_no')->unique();
            $table->string('owner_name');
            $table->string('email');
            $table->float('monthly_rate')->default(1250.00);
            $table->float('maintenance_charges')->default(1000.00);
            $table->float('collection_for_major_maintenance')->default(250.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flatC');
    }
};
