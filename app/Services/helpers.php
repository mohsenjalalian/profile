<?php
/**
 * Created by PhpStorm.
 * User: cotint
 * Date: 8/29/17
 * Time: 7:44 PM
 */

/**
 * @param $str
 * @return mixed
 */
function translateDigits($str)
{
    $newString = str_replace(
        ['0','1','2','3','4','5','6','7','8','9'],
        ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'],
        $str
    );

    return $newString;
}