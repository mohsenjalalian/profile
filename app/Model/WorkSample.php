<?php

namespace App\Model;
/**
 * Class WorkSample
 * @package App\Model
 */
class WorkSample extends Model
{
    //relation Category(category_id)
    public function category()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    //relation User(skill_id)
    public function skills()
    {
        return $this->belongsToMany(Skills::class);
    }
}
