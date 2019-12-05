<?php


namespace App\NunyaLab;


class NetworkCore
{
    public static function apiResponse(string $errorState, string $message, string $content=''):string{
        return json_encode([
            'errorState' => $errorState,
            'errorMessage' => $message,
            'content' => $content
        ]);
    }
}
