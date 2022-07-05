<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $guarded = [];

    public function comments(){
        return $this->belongsToMany(Comment::class, 'comments');
    }
}
