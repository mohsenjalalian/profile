<?php

namespace App\Model;
/**
 * Class Category_Work_sample
 * @package App\Model
 */
class CategoryWorkSample extends Model
{
    //relation to Work Sample
    public function workSample()
    {
        return $this->belongsTo(WorkSample::class);
    }

    //relation to Work Sample
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
