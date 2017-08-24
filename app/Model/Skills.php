<?php

namespace App\Model;

use App\Model\SkillType;

/**
 * Class Skills
 * @package App\Model
 */
class Skills extends Model
{
    //relation to Work Sample
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function workSample()
    {
        return $this->belongsToMany(WorkSample::class);
    }

    //relation to User(user_id)

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(SkillType::class);
    }
}
