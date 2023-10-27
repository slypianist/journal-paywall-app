<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function podcast(){
        return $this->belongsTo(Podcast::class);
    }

    protected $fillable = [
        'title',
        'description',
        'audio_file',
        'published_at',
        'slug'
    ];
}
