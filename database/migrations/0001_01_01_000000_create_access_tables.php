<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table): void {
            $table->tinyIncrements('id');
            $table->string('code', 30)->unique();
            $table->string('name', 80);
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('people', function (Blueprint $table): void {
            $table->id();
            $table->char('curp', 18)->unique();
            $table->string('first_name', 120);
            $table->string('last_name', 160);
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('person_id')->unique()->constrained('people')->restrictOnDelete();
            $table->unsignedTinyInteger('role_id');
            $table->string('email', 254)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('must_change_password')->default(true);
            $table->string('status', 15)->default('ACTIVE');
            $table->unsignedSmallInteger('failed_login_attempts')->default(0);
            $table->timestamp('locked_until')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->rememberToken();
            $table->timestamp('deactivated_at')->nullable();
            $table->timestamp('retention_locked_at')->nullable();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles')->restrictOnDelete();
            $table->index(['status', 'locked_until']);
        });

        Schema::create('password_reset_tokens', function (Blueprint $table): void {
            $table->string('email', 254)->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table): void {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index()->constrained()->nullOnDelete();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
        Schema::dropIfExists('people');
        Schema::dropIfExists('roles');
    }
};
