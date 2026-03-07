<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Techstack extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'issuer',
        'issued_date',
        'expiry_date',
        'credential_url',
        'image',
    ];

    protected $casts = [
        'issued_date' => 'date',
        'expiry_date' => 'date',
    ];
}
