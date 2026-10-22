<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recurring_availabilities', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('psychologist_id')->constrained()->restrictOnDelete();
            $table->foreignId('center_id')->constrained()->restrictOnDelete();
            $table->unsignedTinyInteger('weekday')->comment('1=lunes, 7=domingo');
            $table->time('starts_at');
            $table->time('ends_at');
            $table->date('valid_from');
            $table->date('valid_until')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->index(['psychologist_id', 'weekday', 'valid_from'], 'recurring_availability_lookup');
        });

        Schema::create('dated_availabilities', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('psychologist_id')->constrained()->restrictOnDelete();
            $table->foreignId('center_id')->constrained()->restrictOnDelete();
            $table->date('available_on');
            $table->time('starts_at');
            $table->time('ends_at');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->index(['psychologist_id', 'available_on', 'starts_at'], 'dated_availability_lookup');
        });

        Schema::create('availability_blocks', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('psychologist_id')->constrained()->restrictOnDelete();
            $table->foreignId('center_id')->constrained()->restrictOnDelete();
            $table->dateTime('starts_at');
            $table->dateTime('ends_at');
            $table->foreignId('created_by_user_id')->constrained('users')->restrictOnDelete();
            $table->timestamps();
            $table->index(['psychologist_id', 'starts_at']);
            $table->index(['center_id', 'starts_at']);
        });

        if (DB::getDriverName() === 'mysql') {
            DB::statement('ALTER TABLE recurring_availabilities ADD CONSTRAINT recurring_weekday_check CHECK (weekday BETWEEN 1 AND 7)');
            DB::statement('ALTER TABLE recurring_availabilities ADD CONSTRAINT recurring_times_check CHECK (ends_at > starts_at)');
            DB::statement('ALTER TABLE recurring_availabilities ADD CONSTRAINT recurring_dates_check CHECK (valid_until IS NULL OR valid_until >= valid_from)');
            DB::statement('ALTER TABLE dated_availabilities ADD CONSTRAINT dated_times_check CHECK (ends_at > starts_at)');
            DB::statement('ALTER TABLE availability_blocks ADD CONSTRAINT availability_block_times_check CHECK (ends_at > starts_at)');
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('availability_blocks');
        Schema::dropIfExists('dated_availabilities');
        Schema::dropIfExists('recurring_availabilities');
    }
};
