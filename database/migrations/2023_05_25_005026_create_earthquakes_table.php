<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('earthquakes', function (Blueprint $table) {
            $table->id();
            $table->string('disaster_type');
            $table->bigInteger('incident_count');
            $table->dateTime('incident_date');
            $table->text('remarks')->nullable();
            $table->bigInteger('human_male')->nullable();
            $table->bigInteger('human_female')->nullable();
            $table->bigInteger('human_others')->nullable();
            $table->bigInteger('infrastructure_house')->nullable();
            $table->bigInteger('infrastructure_hospital')->nullable();
            $table->bigInteger('infrastructure_school')->nullable();
            $table->bigInteger('infrastructure_office_building')->nullable();
            $table->bigInteger('infrastructure_others')->nullable();
            $table->bigInteger('animal_cow')->nullable();
            $table->bigInteger('animal_buffalo')->nullable();
            $table->bigInteger('animal_goat_sheep')->nullable();
            $table->bigInteger('animal_hen_chicken')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('earthquakes');
    }
};
