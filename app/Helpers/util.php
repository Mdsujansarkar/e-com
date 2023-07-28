<?php

declare(strict_types=1);

if (function_exists('_successMsgResp')) {
    function _successMsgResp(string $message = 'Request Successful.', int $statusCode = 200)
    {
        $data = [
            'success' => true,
            'message' => $message,
        ];

        return response()->json($data, $statusCode);
    }
}
