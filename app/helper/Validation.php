<?php

namespace App\helper;

class Validation
{
    public static function getFirstErrors($error)
    {
        $return = [];
        if ($error != NULL) {
            foreach ($error as $k => $v) {
                $return[$k] = (is_array($v) ? $v[0] : $v);
            }
            return $return;
        }
        return [];
    }
}
