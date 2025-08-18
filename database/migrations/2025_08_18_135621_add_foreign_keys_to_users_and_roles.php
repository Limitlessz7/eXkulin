<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsersAndRoles extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'usr_roles_id')) {
                $table->unsignedBigInteger('usr_roles_id')->nullable()->after('usr_email');
            }
            if (!Schema::hasColumn('users', 'usr_created_by')) {
                $table->unsignedBigInteger('usr_created_by')->after('usr_activation');
            }
            if (!Schema::hasColumn('users', 'usr_updated_by')) {
                $table->unsignedBigInteger('usr_updated_by')->nullable()->after('usr_created_by');
            }
            if (!Schema::hasColumn('users', 'usr_deleted_by')) {
                $table->unsignedBigInteger('usr_deleted_by')->nullable()->after('usr_updated_by');
            }

            // Foreign keys
            $table->foreign('usr_roles_id')->references('rl_id')->on('roles')->onDelete('set null');
            $table->foreign('usr_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('usr_updated_by')->references('usr_id')->on('users')->onDelete('set null');
            $table->foreign('usr_deleted_by')->references('usr_id')->on('users')->onDelete('set null');
        });

        Schema::table('roles', function (Blueprint $table) {
            if (!Schema::hasColumn('roles', 'rl_create_by')) {
                $table->unsignedBigInteger('rl_create_by')->after('rl_description');
            }
            if (!Schema::hasColumn('roles', 'rl_update_by')) {
                $table->unsignedBigInteger('rl_update_by')->nullable()->after('rl_create_by');
            }
            if (!Schema::hasColumn('roles', 'rl_delete_by')) {
                $table->unsignedBigInteger('rl_delete_by')->nullable()->after('rl_update_by');
            }

            $table->foreign('rl_create_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('rl_update_by')->references('usr_id')->on('users')->onDelete('set null');
            $table->foreign('rl_delete_by')->references('usr_id')->on('users')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['usr_roles_id']);
            $table->dropForeign(['usr_created_by']);
            $table->dropForeign(['usr_updated_by']);
            $table->dropForeign(['usr_deleted_by']);
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->dropForeign(['rl_create_by']);
            $table->dropForeign(['rl_update_by']);
            $table->dropForeign(['rl_delete_by']);
        });
    }
}
