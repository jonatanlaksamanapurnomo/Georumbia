<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    public function getTestimonialExcerptAttribute()
    {
        return Str::words($this->body, '25');
    }
}
