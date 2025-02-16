<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('technical_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
            $table->string('marca');
            $table->string('model');
            $table->unsignedBigInteger('IMEI')->unique();
            $table->string('details')->nullable();
            $table->string('problem');
            $table->string('diagnostic')->nullable();
            $table->double('estimate_price')->nullable();
            $table->double('final_price')->nullable();
            $table->datetime('entry_date');
            $table->datetime('delivery_date')->nullable();
            $table->string('note')->nullable();
            $table->enum('status', ['WIP', 'success','canceled','finished'])->default('WIP');
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
        Schema::dropIfExists('services');
    }
};
