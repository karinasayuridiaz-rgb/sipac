<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Person extends Model
{
    protected $fillable = ['curp', 'first_name', 'last_name'];

    protected static function booted(): void
    {
        static::saving(function (Person $person): void {
            $person->curp = mb_strtoupper(trim($person->curp));
        });
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function getFullNameAttribute(): string
    {
        return trim("{$this->first_name} {$this->last_name}");
    }
}
