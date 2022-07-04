<?php

namespace Wayhood\H3yun\Request;

use Wayhood\H3yun\Client;

abstract class AbstractRequest
{
    public ?string $Name;

    public ?string $ActionName;

    // 需要查询的表单编码
    public ?string $SchemaCode;

    abstract public function getParams(): array;

    public function request()
    {
        $client = make(Client::class);
        $client->domain = config('h3yun.domain');
        $client->header = [
            'EngineCode' => config('h3yun.engine_code'),
            'EngineSecret' => config('h3yun.engine_secret'),
        ];
        $client->json = $this->getParams();
        return json_decode($client->post(), true);
    }
}