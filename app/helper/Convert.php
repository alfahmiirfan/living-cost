<?php

namespace App\helper;

use Exception;
use Illuminate\Support\Str;

class Convert
{
    public static function base64ToFile(string $base64): array | bool
    {
        try {
            $extension = explode('/', explode(':', substr($base64, 0, strpos($base64, ';')))[1])[1];
            $replace = substr($base64, 0, strpos($base64, ',') + 1);
            $image = str_replace($replace, '', $base64);
            $image = str_replace(' ', '+', $image);
            $imageName = Str::random(10) . '.' . $extension;
            return [
                'data' => $image,
                'extention' => $extension,
                'randomName' => $imageName
            ];
        } catch (Exception $e) {
            return false;
        }
    }
}
