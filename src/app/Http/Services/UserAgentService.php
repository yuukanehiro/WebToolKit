<?php

namespace App\Http\Services;

class UserAgentService
{
    /**
     * UserAgentを返却
     *
     * @return array
     */
    public function getUserAgent(): array
    {
        return $response = [
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
        ];
    }
}
