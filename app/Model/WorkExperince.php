<?php

namespace App\Model;
/**
 * Class WorkExperince
 * @package App\Model
 */
class WorkExperince extends Model
{
    //relation to User(user_id)
    public function user()
    {
        return $this->belongsTo(USER::class);
    }
}
