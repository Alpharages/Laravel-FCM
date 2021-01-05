<?php

namespace LaravelFCM;

use GuzzleHttp\Client;
use Illuminate\Support\Manager;

class FCMManager extends Manager
{
    /**
     * @return string
     */
    public function getDefaultDriver()
    {
        return app('config')->get('fcm.driver');
    }

    /**
     * @return Client
     */
    protected function createHttpDriver()
    {
        $config = app('config')->get('fcm.http', []);

        return new Client(['timeout' => $config['timeout']]);
    }
}
