<?php

namespace App\DomainLayer\Aggregates;

/**
 * Class ArrayUtil
 * Util Class for Arrays
 *
 * @package App\DomainLayer\Aggregates
 */
class ArrayUtil
{
    /**
     *
     * @param array $arr
     * @return true if $arr is an associative array
     */
    public static function isAssocArray(array $arr)
    {
        foreach ($arr as $k => $v) {
            if (is_int($k)) {
                return false;
            }
        }
        return true;
    }
}
