<?php


namespace Veloyd;

class Client
{
    private $client;

    const BASE_URI = "https://app.veloyd.nl/api/";
    const BASE_TEST_URI = "https://test.veloyd.nl/api/";

    public function __construct($api_key, $test_mode = false)
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => $test_mode ? self::BASE_TEST_URI : self::BASE_URI,
            'headers' => [
                'Authorization' => "Apikey {$api_key}"
            ]
        ]);
    }

    public function request($method, $uri, $options = [])
    {
        return $this->client->request($method, $uri, $options);
    }
}
