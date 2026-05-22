<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

      public function section()
    {
        return $this->belongsTo(Section::class);
    }
    // public function getRouteKeyName()
    // {
    //     return 'scheme'; // This tells Laravel to use "scheme" instead of "id"
    // }
}
