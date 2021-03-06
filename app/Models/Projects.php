<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url_name', 'description', 'author', 'documentationLink', 'GithubLink', 'linkImage', 'languages', 'published_at', 'edit_at'];
    protected $table = "projects";
    protected $primaryKey = 'identifier';
    public $timestamps = false;

    public function scopeGetHomepageProjects($query) {

        return $query->whereBetween('identifier', [1,100])->limit(2)->get();

    }

    public function scopeById($query, $id) {

        return $query->where('identifier', '=', $id);

    }

}
