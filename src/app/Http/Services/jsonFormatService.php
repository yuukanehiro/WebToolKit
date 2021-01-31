<?php

namespace App\Http\Services;

class JsonFormatService
{
    const FAILED_MESSAGE = "取得失敗";

    /**
     * JSONをきれいにして返却
     *
     * @return array
     */
    public function formatJson(string $json): array
    {
        $array_response = json_decode($json, true);
        $json = json_encode($array_response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        \Log::debug(json_encode($json));
        return $response = [
            'json' => $json
        ];
    }
}
