<?php

namespace App\Http\Controllers\YourInfo;

use App\Http\Services\UserAgentService;
use Illuminate\Routing\Controller as BaseController;

class UserAgentController extends BaseController
{
    public function __construct(
        UserAgentService $s_user_agent
    ) {
        $this->s_user_agent = $s_user_agent;
    }

    public function show()
    {
        // UserAgent取得
        $my_information = $this->s_user_agent->getUserAgent();

        return view('yourInfo.index', compact('my_information'));
    }
}
