<?php

namespace Wayhood\H3yun;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'publish' => [
                [
                    'id' => 'h3yun',
                    'description' => 'The config for h3yun.',
                    'source' => __DIR__ . '/../publish/h3yun.php',
                    'destination' => BASE_PATH . '/config/autoload/h3yun.php',
                ],
            ],
        ];
    }
}