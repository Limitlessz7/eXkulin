<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id('anc_id'); // bigint auto increment primary key

            $table->string('anc_title');
            $table->unsignedBigInteger('anc_extracuriculler_id'); // FK ke extracuricullers (pastikan tipe numeric)

            $table->unsignedBigInteger('anc_created_by');
            $table->unsignedBigInteger('anc_updated_by')->nullable();
            $table->unsignedBigInteger('anc_deleted_by')->nullable();

            $table->timestamp('anc_created_at')->useCurrent();
            $table->timestamp('anc_updated_at')->nullable()->useCurrentOnUpdate();
            $table->timestamp('anc_deleted_at')->nullable();

            $table->string('anc_sys_note', 255)->nullable();

            // Foreign keys
            $table->foreign('anc_extracuriculler_id')->references('ext_id')->on('extracuricullers');
            $table->foreign('anc_created_by')->references('usr_id')->on('users');
            $table->foreign('anc_updated_by')->references('usr_id')->on('users');
            $table->foreign('anc_deleted_by')->references('usr_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
