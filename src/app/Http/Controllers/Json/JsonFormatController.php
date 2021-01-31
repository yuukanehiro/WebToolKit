<?php

namespace App\Http\Controllers\Json;

use App\Http\Services\jsonFormatService;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\JsonFormatRequest;
use Illuminate\Http\Request;

class JsonFormatController extends BaseController
{
    public function __construct(
        JsonFormatService $s_json_format
    ) {
        $this->s_json_format = $s_json_format;
    }

    public function show()
    {
        return view('json.index');
    }

    public function getFormatJson(Request $request)
    {
        $json = $request->input('json');
        $response = $this->s_json_format->formatJson($json);

        return view('json.index', compact('response'));
    }
}
