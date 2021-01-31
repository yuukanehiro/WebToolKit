<?php

namespace App\Http\Services;

class UserAgentService
{
    const FAILED_MESSAGE = "取得失敗";

    /**
     * UserAgentを返却
     *
     * @return array
     */
    public function getUserAgent(): array
    {
        return $response = [
            'ip_address' => isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : self::FAILED_MESSAGE,
            'user_agent' => isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : self::FAILED_MESSAGE,
        ];
    }
}
