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
        Schema::create('aircrafts', function (Blueprint $table) {
            $table->id();
            $table->json('subfleets'); /* An array of subfleet id's that the aircraft has been assigned to.
            If the array is empty, the aircraft will be available in all subfleets at this moment. */
            $table->string('registration');
            $table->string('type'); // The type of aircraft e.g. A32N
            $table->enum('current_state', ['IN_USE', 'AVAILABLE', 'MAINTENANCE', 'DISABLED']); /* Current state of the aircraft.
            Maintenance is only available if the 'Aircraft Maintenance' is enabled in the airline settings */
            $table->unsignedBigInteger('seat_count'); // The amount of seats available
            $table->unsignedBigInteger('first_class_seats'); // The amount of first class seats
            $table->unsignedBigInteger('weekly_costs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aircraft');
    }
};
