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
        Schema::create('flatA', function (Blueprint $table) {
            $table->id();
            $table->string('flat_no')->unique();
            $table->string('owner_name');
            $table->string('owner_email');
            $table->float('monthly_rate')->default(1240.00);
            $table->float('maintenance_charges')->default(1000.00);
            $table->float('collection_for_major_maintenance')->default(240.00);
            $table->timestamps();
        });

        // Schema::create('flatA', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('flat_no')->primary();
        //     $table->string('owner_name');
        //     $table->float('monthly_rate')->default(1240.00);
        //     $table->float('monthly_maintenance_charges')->default(1000.00);
        //     $table->float('monthly_collection_for_major_maintenance')->default(1000.00);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flatA');
    }
};
