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
            'browser' => !is_null($this->_getBrowser()) ? $this->_getBrowser() : self::FAILED_MESSAGE,
        ];
    }

    /**
     * ブラウザを取得
     *
     * @return ?string
     */
    private function _getBrowser(): ?string
    {
        $browser = strtolower($_SERVER['HTTP_USER_AGENT']);

        // ユーザーエージェントの情報を基に判定
        if (strstr($browser, 'edge')) {
            return "Edge";
        } elseif (strstr($browser, 'trident') || strstr($browser, 'msie')) {
            return "Internet Explorer";
        } elseif (strstr($browser, 'chrome')) {
            return "Google Chrome";
        } elseif (strstr($browser, 'firefox')) {
            return "Firefox";
        } elseif (strstr($browser, 'safari')) {
            return "Safari";
        } elseif (strstr($browser, 'opera')) {
            return "Opera";
        } else {
            return null;
        }
    }
}
