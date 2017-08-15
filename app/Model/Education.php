<?php

namespace App\Model;
/**
 * Class Education
 * @package App\Model
 */
class Education extends Model
{
    //declare relation to user(user_id)
    public function user()
    {
        return $this->belongsTo(USER::class);
    }
}
