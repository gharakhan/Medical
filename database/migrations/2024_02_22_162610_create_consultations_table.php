<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('doctor_place_id');
            $table->string('token')->nullable();
            $table->string('title')->nullable();
            $table->string('call_duration')->nullable();
            $table->text('description')->nullable();
            $table->string('on_calls')->nullable();
            $table->string('initial_message')->nullable();
            $table->integer('price')->nullable();
            $table->integer('status')->nullable();
            $table->integer('start_show')->nullable();
            $table->integer('end_show')->nullable();
            $table->integer('commission_percent')->nullable();
            $table->integer('show_remind')->nullable();
            $table->boolean('is_triage')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultations');
    }
}
