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
        Schema::create('coachs', function (Blueprint $table) {
             $table->id(); // BIGINT auto increment, primary key

            $table->unsignedBigInteger('users_id');       // FK ke tb_users
            $table->unsignedBigInteger('extracuricullers_id');     // FK ke tb_ekskuls (asumsi nama tabel)

            $table->unsignedBigInteger('created_by');      // FK ke tb_users
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->timestamps();       // created_at & updated_at
            $table->softDeletes();      // deleted_at
            $table->string('sys_note', 255)->nullable();

            // Foreign Key Constraints
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('extracuricullers_id')->references('id')->on('extracuricullers'); // pastikan nama tabel benar

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->foreign('deleted_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coachs');
    }
};
