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
        Schema::create('billreport', function (Blueprint $table) {
            $table->id();
            $table->string('flat_no');
            $table->string('billorderid')->unique();
            $table->boolean('bill_pament_status')->default(false);
            $table->date('billdate')->nullable();
            $table->time('billtime')->nullable();
            $table->date('bill_send_date');
            $table->time('bill_send_time');
            $table->boolean('billsentstatus')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billreport');
    }
};
