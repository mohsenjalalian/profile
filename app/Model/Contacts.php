<?php

namespace App\Model;
/**
 * Class Contacts
 * @package App\Model
 */
class Contacts extends Model
{
    //relation to User(user_id)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
