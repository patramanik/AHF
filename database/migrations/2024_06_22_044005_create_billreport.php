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
            $table->date('billdate');
            $table->time('billtime');
            $table->string('billorderid');
            $table->boolean('billsentstatus');
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
