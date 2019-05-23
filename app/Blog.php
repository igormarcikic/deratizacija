<?php

namespace Deratizacija;

use Illuminate\Database\Eloquent\Model;
use Deratizacija\Photo;

class Blog extends Model
{
    protected $fillable = ['title', 'body', 'photo_id', 'slug'];

    public function photo(){
        return $this->belongsTo(Photo::class);
    }
}
