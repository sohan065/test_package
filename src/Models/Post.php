<?php

namespace Sohan065\Crud\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'title',
        'text',
    ];

    protected $attributes = [
        'is_active' => true
    ];
}
