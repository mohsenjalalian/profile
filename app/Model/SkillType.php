<?php

namespace App\Model;

use App\Model\Skills;

//use Illuminate\Database\Eloquent\Model;

/**
 * Class SkillType
 * @package App
 */
class SkillType extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skill()
    {
        return $this->hasMany(Skills::class,'type_id');
    }
}
