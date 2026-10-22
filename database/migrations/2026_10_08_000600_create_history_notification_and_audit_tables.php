<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('basic_session_records', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('appointment_id')->unique()->constrained()->restrictOnDelete();
            $table->string('attendance', 15);
            $table->string('administrative_observation', 500)->nullable()->comment('Texto plano; sin contenido clínico');
            $table->foreignId('recorded_by_user_id')->constrained('users')->restrictOnDelete();
            $table->timestamp('corrected_at')->nullable();
            $table->timestamp('deactivated_at')->nullable();
            $table->timestamp('retention_locked_at')->nullable();
            $table->timestamps();
        });

        Schema::create('email_notifications', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('appointment_id')->constrained()->restrictOnDelete();
            $table->foreignId('recipient_user_id')->constrained('users')->restrictOnDelete();
            $table->string('type', 30)->default('CANCELLATION');
            $table->string('status', 15)->default('PENDING');
            $table->unsignedSmallInteger('attempts')->default(0);
            $table->string('last_error_code', 80)->nullable();
            $table->timestamp('last_attempt_at')->nullable();
            $table->timestamp('sent_at')->nullable();
            $table->timestamps();
            $table->index(['status', 'created_at']);
            $table->index('recipient_user_id');
        });

        Schema::create('audit_events', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('actor_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('action', 80);
            $table->string('auditable_type', 100);
            $table->unsignedBigInteger('auditable_id')->nullable();
            $table->string('result', 20);
            $table->uuid('correlation_id')->nullable();
            $table->timestamp('retention_locked_at')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->index(['created_at', 'action']);
            $table->index(['auditable_type', 'auditable_id']);
        });

        Schema::create('idempotency_commands', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('user_id')->constrained()->restrictOnDelete();
            $table->uuid('key');
            $table->string('operation', 80);
            $table->string('resource_type', 100)->nullable();
            $table->unsignedBigInteger('resource_id')->nullable();
            $table->timestamp('expires_at');
            $table->timestamps();
            $table->unique(['user_id', 'key']);
            $table->index('expires_at');
        });

        if (DB::getDriverName() === 'mysql') {
            DB::statement("ALTER TABLE basic_session_records ADD CONSTRAINT basic_record_attendance_check CHECK (attendance IN ('ATTENDED','NO_SHOW'))");
            DB::statement("ALTER TABLE email_notifications ADD CONSTRAINT email_notification_type_check CHECK (type = 'CANCELLATION')");
            DB::statement("ALTER TABLE email_notifications ADD CONSTRAINT email_notification_status_check CHECK (status IN ('PENDING','SENT','FAILED'))");
            DB::statement("ALTER TABLE audit_events ADD CONSTRAINT audit_event_result_check CHECK (result IN ('SUCCESS','REJECTED','ERROR'))");
            DB::statement('ALTER TABLE idempotency_commands ADD CONSTRAINT idempotency_expiration_check CHECK (expires_at > created_at)');
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('idempotency_commands');
        Schema::dropIfExists('audit_events');
        Schema::dropIfExists('email_notifications');
        Schema::dropIfExists('basic_session_records');
    }
};
