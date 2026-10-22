<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('psychologists', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->restrictOnDelete();
            $table->string('professional_license', 30)->unique();
            $table->text('professional_bio')->nullable();
            $table->string('status', 15)->default('ACTIVE');
            $table->timestamp('deactivated_at')->nullable();
            $table->timestamps();
            $table->index('status');
        });

        Schema::create('specialties', function (Blueprint $table): void {
            $table->id();
            $table->string('name', 120)->unique();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('psychologist_specialty', function (Blueprint $table): void {
            $table->foreignId('psychologist_id')->constrained()->cascadeOnDelete();
            $table->foreignId('specialty_id')->constrained()->restrictOnDelete();
            $table->primary(['psychologist_id', 'specialty_id']);
        });

        Schema::create('centers', function (Blueprint $table): void {
            $table->id();
            $table->string('name', 160)->unique();
            $table->string('address', 500);
            $table->string('phone', 25);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('center_psychologist', function (Blueprint $table): void {
            $table->foreignId('center_id')->constrained()->restrictOnDelete();
            $table->foreignId('psychologist_id')->constrained()->cascadeOnDelete();
            $table->primary(['center_id', 'psychologist_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('center_psychologist');
        Schema::dropIfExists('centers');
        Schema::dropIfExists('psychologist_specialty');
        Schema::dropIfExists('specialties');
        Schema::dropIfExists('psychologists');
    }
};
