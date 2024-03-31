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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            /* Airline specific columns */
            $table->unsignedBigInteger('airline_id');
            $table->foreign('airline_id')->references('id')->on('airlines');

            /* Flight specific columns */
            $table->enum('flight_type', ['PASSENGER', 'CARGO', 'TRANSFER'])->default('PASSENGER'); /* The default type of flight,
            PASSENGER for passengers, CARGO for cargo and TRANSFER if the plane is being moved to another airport without any payload.
            The TRANSFER enum is only being used if airline was set to "only allow planes that are at the origin airport" setting is set to true */

            $table->string('callsign'); // The callsign of the flight
            $table->unsignedBigInteger('flight_number'); // The flight number
            $table->time('estimated_depature_time'); // The estimated departure time
            $table->time('estimated_arrival_time'); // The estimated arrival time
            $table->time('actual_departure_time'); // The actual departure time
            $table->time('actual_arrival_time'); // The actual arrival time
            $table->string('route'); // The route of the flight
            $table->string('origin', 4); // The origin of the flight
            $table->string('destination', 4); // The destination of the flight
            $table->string('alternate', 4)->nullable(); // The alternate airport of the flight
            $table->string('origin_parking_stand')->nullable(); // The parking stand of the origin airport
            $table->string('destination_parking_stand')->nullable(); // The parking stand of the destination airport
            $table->string('alternate_parking_stand')->nullable(); // The parking stand of the alternate airport
            $table->unsignedBigInteger('aircraft_id'); // The used plane
            $table->foreign('aircraft_id')->references('id')->on('aircrafts');  // foreign for aircraft_id
            $table->unsignedBigInteger('estimated_time'); // The estimated time for the flight in minutes
            $table->unsignedBigInteger('actual_time')->default(0); // The actual time the flight took / current time in minutes
            $table->enum('state', ['PLANNED', 'IN_PROGRESS', 'CONCLUDED', 'CANCELLED'])->default('PLANNED'); // The current state of the flight
            $table->string('metar_origin'); // The METAR for the origin airport
            $table->string('metar_destination'); // The METAR for the destination airport
            $table->string('metar_alternate')->nullable(); // The METAR for the alternate airport
            $table->unsignedBigInteger('passenger_count')->default(0); // The amount of passengers on the flight
            $table->float('payload')->default(0); // The amount of payload on the flight
            $table->float('fuel')->default(0); // The amount of fuel on the flight
            $table->unsignedBigInteger('cruise_level')->default(0); // The cruise level of the flight

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
