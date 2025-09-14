<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'title',
        'description',
        'date',
        'is_active',
    ];

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }

}
