<?php

namespace App\Model;
/**
 * Class Category
 * @package App\Model
 */
class Category extends Model
{
    //relation to Work Sample
    public function workSample()
    {
        return $this->belongsToMany(WorkSample::class)->withTimestamps();
    }
}
