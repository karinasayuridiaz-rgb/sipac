<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('person_id')->unique()->constrained('people')->restrictOnDelete();
            $table->foreignId('user_id')->nullable()->unique()->constrained()->restrictOnDelete();
            $table->date('birth_date');
            $table->string('sex', 30);
            $table->string('phone', 25);
            $table->string('address', 500);
            $table->string('status', 15)->default('ACTIVE');
            $table->timestamp('care_closed_at')->nullable();
            $table->timestamp('deactivated_at')->nullable();
            $table->timestamp('retention_locked_at')->nullable();
            $table->timestamps();
            $table->index('status');
        });

        Schema::create('guardians', function (Blueprint $table): void {
            $table->foreignId('user_id')->primary()->constrained()->restrictOnDelete();
            $table->string('phone', 25);
            $table->string('address', 500);
            $table->timestamps();
        });

        Schema::create('guardian_patient_links', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('guardian_user_id')->constrained('guardians', 'user_id')->restrictOnDelete();
            $table->foreignId('patient_id')->constrained()->restrictOnDelete();
            $table->string('representation_type', 100);
            $table->string('document_type', 100);
            $table->string('document_reference', 160);
            $table->timestamp('verified_at');
            $table->foreignId('verified_by_user_id')->constrained('users')->restrictOnDelete();
            $table->boolean('is_primary_contact')->default(false);
            $table->timestamp('ended_at')->nullable();
            if (DB::getDriverName() === 'mysql') {
                $table->unsignedBigInteger('active_patient_id')->nullable()->storedAs('CASE WHEN ended_at IS NULL THEN patient_id ELSE NULL END');
                $table->unsignedBigInteger('primary_patient_id')->nullable()->storedAs('CASE WHEN ended_at IS NULL AND is_primary_contact = 1 THEN patient_id ELSE NULL END');
            }
            $table->timestamps();

            if (DB::getDriverName() === 'mysql') {
                $table->unique(['guardian_user_id', 'active_patient_id'], 'guardian_patient_active_unique');
                $table->unique('primary_patient_id', 'patient_primary_guardian_unique');
            }
            $table->index(['patient_id', 'ended_at']);
        });

        if (DB::getDriverName() === 'mysql') {
            DB::statement("ALTER TABLE patients ADD CONSTRAINT patients_status_check CHECK (status IN ('ACTIVE','INACTIVE'))");
            DB::statement('ALTER TABLE guardian_patient_links ADD CONSTRAINT guardian_link_dates_check CHECK (ended_at IS NULL OR ended_at >= verified_at)');
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('guardian_patient_links');
        Schema::dropIfExists('guardians');
        Schema::dropIfExists('patients');
    }
};
