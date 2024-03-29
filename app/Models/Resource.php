<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class Resource extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
        'description', 
        'author',
        'link',
        'is_active'
    ];
       
    public function scopeSpoilers(Builder $query): Collection
    {
        return $query->where('is_active', true)->latest()->limit(2)->get();
    }

}
