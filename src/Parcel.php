<?php

namespace Veloyd;

use Veloyd\Resources\Address;

class Parcel extends Client
{
    protected $parcel_uri = "parcel";

    public function get($id)
    {
        return $this->request('get', "{$this->parcel_uri}/get/{$id}");
    }

    public function options(Address $address, $options = [])
    {
        return $this->request('post', "{$this->parcel_uri}/options", ['json' => $this->parcel($address, $options)]);
    }

    public function create(Address $address, $options = [], $reference = "")
    {
        return $this->request('post', "{$this->parcel_uri}/create", ['json' => $this->parcel($address, $options, $reference)]);
    }

    public function label($id)
    {
        return $this->request('get', "{$this->parcel_uri}/label/{$id}");
    }

    public function remove($id)
    {
        try {
            return $this->request('get', "{$this->parcel_uri}/remove/{$id}");
        } catch (\Exception $e) {
            return true;
        }
    }

    private function parcel(Address $address, array $options, $reference = "")
    {
        return [
            "parcel" => [
                "address" => $address->toArray(),
                "options" => $options,
                "reference" => $reference,
                "comment" => ""
            ]
        ];
    }
}
