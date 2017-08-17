<?php

namespace App\Model;
/**
 * Class SocialNetwork
 * @package App\Model
 */
class SocialNetwork extends Model
{
    //Declare Relation to User Model
    public function user()
    {
        //each Post Belongs to 1 User
        return $this->belongsTo(User::class);
    }
}
