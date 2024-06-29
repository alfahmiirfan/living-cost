<?php

namespace App\helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Token
{
    /**
     * @param array $data
     * @param int $exp
     * 
     * @return [type]
     */
    public static function encode(array $data, int $exp = 24)
    {
        $key = JWT::encode(array_merge([
            'exp' => (time() + 3600) * $exp,
        ], $data), config('jwt.secret_key'), 'HS256');

        return $key;
    }

    /**
     * @param string $key
     * 
     * @return [type]
     */
    public static function decode(string $key)
    {
        try{
            $decode = JWT::decode($key,new Key(config('jwt.secret_key'), 'HS256'));
            return $decode;
        }catch (Exception $e){
            return false;
        }
    }
}
