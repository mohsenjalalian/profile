<?php

namespace App\Model;
/**
 * Class Language
 * @package App\Model
 */
class Language extends Model
{
    //relation User(user_id)
    public function user()
    {
        return $this->belongsTo(USER::class);
    }
}
