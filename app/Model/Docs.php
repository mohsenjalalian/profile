<?php

namespace App\Model;
/**
 * Class Docs
 * @package App\Model
 */
class Docs extends Model
{
    //relation to User(user_id)
    public function user()
    {
        return $this->belongsTo(USER::class);
    }
}
