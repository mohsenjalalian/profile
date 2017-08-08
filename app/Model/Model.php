<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Model
 * @package App
 * This class is for remove all guard when create new value in DB so we dont have to fill all Column
 */
class Model extends Eloquent
{
    protected $guarded = [];
}