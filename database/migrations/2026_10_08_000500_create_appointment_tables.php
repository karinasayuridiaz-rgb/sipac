<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('patient_id')->constrained()->restrictOnDelete();
            $table->foreignId('psychologist_id')->nullable()->constrained()->restrictOnDelete();
            $table->foreignId('center_id')->nullable()->constrained()->restrictOnDelete();
            $table->foreignId('requested_by_user_id')->constrained('users')->restrictOnDelete();
            $table->foreignId('scheduled_by_user_id')->nullable()->constrained('users')->restrictOnDelete();
            $table->foreignId('confirmed_by_user_id')->nullable()->constrained('users')->restrictOnDelete();
            $table->foreignId('exception_authorized_by_user_id')->nullable()->constrained('users')->restrictOnDelete();
            $table->string('exception_reason', 500)->nullable()->comment('Justificación operativa; sin contenido clínico');
            $table->foreignId('origin_appointment_id')->nullable()->constrained('appointments')->restrictOnDelete();
            $table->dateTime('starts_at')->nullable();
            $table->dateTime('ends_at')->nullable();
            $table->string('status', 20)->default('REQUESTED');
            $table->foreignId('cancelled_by_user_id')->nullable()->constrained('users')->restrictOnDelete();
            $table->timestamp('cancelled_at')->nullable();
            $table->unsignedInteger('lock_version')->default(1);
            $table->timestamp('deactivated_at')->nullable();
            $table->timestamp('retention_locked_at')->nullable();
            $table->timestamps();

            $table->index(['patient_id', 'starts_at', 'status']);
            $table->index(['psychologist_id', 'starts_at', 'status']);
            $table->index(['center_id', 'starts_at', 'status']);
        });

        Schema::create('appointment_transitions', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('appointment_id')->constrained()->restrictOnDelete();
            $table->string('previous_status', 20)->nullable();
            $table->string('new_status', 20);
            $table->foreignId('actor_user_id')->constrained('users')->restrictOnDelete();
            $table->timestamp('occurred_at')->useCurrent();
            $table->index(['appointment_id', 'occurred_at']);
            $table->index('actor_user_id');
        });

        if (DB::getDriverName() === 'mysql') {
            DB::statement("ALTER TABLE appointments ADD CONSTRAINT appointments_status_check CHECK (status IN ('REQUESTED','SCHEDULED','CONFIRMED','ATTENDED','NO_SHOW','CANCELLED','RESCHEDULED'))");
            DB::statement('ALTER TABLE appointments ADD CONSTRAINT appointments_times_check CHECK ((starts_at IS NULL AND ends_at IS NULL) OR (starts_at IS NOT NULL AND ends_at > starts_at))');
            DB::statement("ALTER TABLE appointments ADD CONSTRAINT appointments_scheduled_fields_check CHECK (status IN ('REQUESTED','CANCELLED') OR (psychologist_id IS NOT NULL AND center_id IS NOT NULL AND starts_at IS NOT NULL AND ends_at IS NOT NULL AND scheduled_by_user_id IS NOT NULL))");
            DB::statement("ALTER TABLE appointments ADD CONSTRAINT appointments_cancel_check CHECK (status <> 'CANCELLED' OR (cancelled_by_user_id IS NOT NULL AND cancelled_at IS NOT NULL))");
            DB::statement('ALTER TABLE appointments ADD CONSTRAINT appointments_duration_exception_check CHECK (starts_at IS NULL OR ends_at IS NULL OR TIMESTAMPDIFF(MINUTE, starts_at, ends_at) = 60 OR (exception_authorized_by_user_id IS NOT NULL AND exception_reason IS NOT NULL))');
            DB::statement("ALTER TABLE appointment_transitions ADD CONSTRAINT appointment_transition_previous_check CHECK (previous_status IS NULL OR previous_status IN ('REQUESTED','SCHEDULED','CONFIRMED','ATTENDED','NO_SHOW','CANCELLED','RESCHEDULED'))");
            DB::statement("ALTER TABLE appointment_transitions ADD CONSTRAINT appointment_transition_new_check CHECK (new_status IN ('REQUESTED','SCHEDULED','CONFIRMED','ATTENDED','NO_SHOW','CANCELLED','RESCHEDULED'))");
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('appointment_transitions');
        Schema::dropIfExists('appointments');
    }
};
