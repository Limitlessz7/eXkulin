<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id('rl_id');
            $table->string('rl_name', 255);
            $table->string('rl_description', 255)->nullable();

            // Foreign key ke tabel users
            $table->unsignedBigInteger('rl_create_by')->nullable();
            $table->unsignedBigInteger('rl_update_by')->nullable();
            $table->unsignedBigInteger('rl_delete_by')->nullable();

            // $table->timestamp('rl_created_at')->useCurrent();
            // $table->timestamp('rl_updated_at')->nullable()->useCurrentOnUpdate();
            $table->timestamps();
            $table->softDeletes();

            $table->text('rl_sys_note')->nullable();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
