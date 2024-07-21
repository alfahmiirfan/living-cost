<?php

namespace App\helper;

class Response
{
    /**
     * @param array|bool|string $data
     * @param string|null $message
     * @param int $statusCode
     * 
     * @return [type]
     */
    public static function success($data = [], $message = null, $statusCode = 200)
    {
        $res = [
            'statusCode' => $statusCode,
            'data' => $data
        ];
        if ($message) {
            $res['message'] = $message;
        }

        return response()->json($res, $statusCode);
    }

    /**
     * @param string|null $message
     * @param int $statusCode
     * @param array $errors
     * 
     * @return [type]
     */
    public static function error($message = null,$statusCode = 422, $errors = [])
    {
        $res = [
            'statusCode' => $statusCode,
            'errors' => $errors
        ];
        if ($message) {
            $res['message'] = $message;
        }

        return response()->json($res, $statusCode);
    }
}
