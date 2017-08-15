<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

/**
 * Class Admin
 * @package App\Model
 */
class Admin extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;
}
