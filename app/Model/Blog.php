<?php

namespace App\Model;

/**
 * Class Blog
 * @package App\Model
 */
class Blog extends Model
{
    public function album()
    {
        return $this->hasMany(Album::class);
    }
}
