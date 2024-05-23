<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Project extends Model
{
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
    use HasFactory;
    protected $fillable = ['title', 'category', 'cover_image', 'slug', 'url_site', 'url_source-code', 'description'];
}
