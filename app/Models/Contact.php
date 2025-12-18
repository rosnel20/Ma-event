<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'subject',
        'message',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the full name attribute.
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    /**
     * Get the subject label.
     */
    public function getSubjectLabelAttribute(): string
    {
        return match ($this->subject) {
            'pack' => 'Information sur les packs',
            'devis' => 'Demande de devis',
            'reservation' => 'Réservation',
            'autre' => 'Autre demande',
            default => $this->subject,
        };
    }
}
