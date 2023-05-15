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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->foreignId('student_id')->constrained('students');
            $table->enum('payment_type', ['offline', 'online'])->nullable();
            $table->string('amount');
            $table->string('snap_token')->nullable();
            $table->enum('payment_status', ['1', '2', '3', '4'])->comment('1 = menunggu pembayaran, 2 = sudah dibayar, 3 = kadaluarsa, 4 = gagal / batal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
