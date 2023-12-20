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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('room_id')->nullable();
            $table->integer('adults')->unsigned()->default(1);
            $table->integer('children')->unsigned()->default(0);
            $table->decimal('total_amount', 10, 3)->default(0.000);

            $table->date('start_date');
            $table->date('end_date');

            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users');

            $table->softDeletes();
            $table->timestamps(); // Tự động tạo created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
