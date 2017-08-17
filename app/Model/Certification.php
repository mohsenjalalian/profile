<?php

namespace App\Model;
/**
 * Class Certification
 * @package App\Model
 */
class Certification extends Model
{
    //Relation to User(user_id)
    public function user()
    {
        return $this->belongsTo(USER::class);
    }
}
