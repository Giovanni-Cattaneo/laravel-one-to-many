<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    use HasFactory;
    protected $fillable = ['title', 'cover_image', 'slug', 'url_site', 'url_source-code', 'description'];
}
