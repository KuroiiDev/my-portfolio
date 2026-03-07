<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'experience_id',
        'title',
        'description',
        'image',
        'github_url',
        'live_url',
        'is_featured',
    ];

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }

    public function techstacks()  // ← ini yang kurang
    {
        return $this->belongsToMany(Techstack::class);
    }
}
