<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'summary',
        'keywords',
        'category_id',
        'file_url',
        'author_id',
        'tag_id',
    ];


    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
