<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Campos que no quiero que se almacenen
    protected $guarded = [
        'id',
        'created_at',
        'update_ad'
    ];

    // Relacion uno a muchos inversa

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relacion muchos a muchos

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // Relación uno a uno polimorfica

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
