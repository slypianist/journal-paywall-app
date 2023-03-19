<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Podcast extends Model
{
    use HasFactory, Sluggable;

    /* public function getRouteKeyName()
    {
        return 'slug';
    } */
    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function episodes(){
        return $this->hasMany(Episode::class);
    }

    protected $fillable = [
        'title',
        'description',
        'cover_image',
    ];

}
