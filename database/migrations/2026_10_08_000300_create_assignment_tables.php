<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('psychologist_assignments', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('patient_id')->constrained()->restrictOnDelete();
            $table->foreignId('psychologist_id')->constrained()->restrictOnDelete();
            $table->foreignId('assigned_by_user_id')->constrained('users')->restrictOnDelete();
            $table->timestamp('started_at')->useCurrent();
            $table->timestamp('ended_at')->nullable();
            if (DB::getDriverName() === 'mysql') {
                $table->unsignedBigInteger('active_patient_id')->nullable()->storedAs('CASE WHEN ended_at IS NULL THEN patient_id ELSE NULL END');
            }
            $table->timestamps();

            if (DB::getDriverName() === 'mysql') {
                $table->unique('active_patient_id', 'patient_active_assignment_unique');
            }
            $table->index(['patient_id', 'started_at']);
            $table->index(['psychologist_id', 'ended_at']);
        });

        if (DB::getDriverName() === 'mysql') {
            DB::statement('ALTER TABLE psychologist_assignments ADD CONSTRAINT assignment_dates_check CHECK (ended_at IS NULL OR ended_at > started_at)');
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('psychologist_assignments');
    }
};
