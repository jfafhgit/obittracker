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
        Schema::create('obituaries', function (Blueprint $table) {
            $table->id();
            $table->integer('source');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dod');
            $table->string('zip_code')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->integer('disposition');
            $table->foreignId('funeral_home_id')->nullable()->constrained('funeral_homes');
            $table->foreignId('church_id')->nullable()->constrained('churches');
            $table->foreignId('cemetery_id')->nullable()->constrained('cemeteries');
            $table->foreignId('health_facility_id')->nullable()->constrained('health_facilities');
            $table->foreignId('hospice_id')->nullable()->constrained('hospices');
            $table->foreignId('director_id')->nullable()->constrained('directors');
            $table->integer('campaign');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('area_id')->constrained('areas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obituaries');
    }
};
