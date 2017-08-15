<?php

namespace App\Model;

/**
 * Class Album
 * @package App\Model
 */
class Album extends Model
{
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
