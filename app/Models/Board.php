<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{

    use HasFactory;

    protected $fillable = ['title', 'description', 'author','documentationLink','published_at','edit_at'];
    protected $table = "board";
    protected $primaryKey = 'identifier';
    public $timestamps = false;

    public function scopeGetHomepageResources($query) 
    {
        return $query->orderBy("published_at", "DESC")->limit(2)->get();
    }

    public function scopeById($query, $id) {

        return $query->where('identifier', '=', $id);

    }

}
