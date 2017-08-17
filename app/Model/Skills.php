<?php

namespace App\Model;
/**
 * Class Skills
 * @package App\Model
 */
class Skills extends Model
{
    //relation to Work Sample
    public function workSample()
    {
        return $this->belongsToMany(WorkSample::class);
    }

    //relation to User(user_id)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
