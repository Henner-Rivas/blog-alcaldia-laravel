<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;
use App\Models\User;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;

    // relacoin uno muchos inversa

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
    public function category()
    {
        return $this->BelongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /* relacoin  1 a 1 poliforfica */

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
