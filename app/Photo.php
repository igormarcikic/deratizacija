<?php

namespace Deratizacija;

use Illuminate\Database\Eloquent\Model;
use Deratizacija\Blog;

class Photo extends Model
{
    protected $fillable = ['title', 'photo'];

    public function blog(){
        return $this->belongsTo(Blog::class);
    }
}
