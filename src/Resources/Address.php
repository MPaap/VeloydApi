<?php

namespace Veloyd\Resources;

class Address
{
    protected $name;
    protected $attention;
    protected $street;
    protected $nr;
    protected $addition;
    protected $street2;
    protected $postalCode;
    protected $city;
    protected $country;
    protected $email;

    public function __construct(
        $name,
        $street,
        $nr,
        $postalCode,
        $city,
        $country,
        $email = "",
        $attention = "",
        $addition = "",
        $street2 = ""
    ) {
        $this->name = $name;
        $this->street = $street;
        $this->nr = $nr;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->country = $country;
        $this->email = $email;
        $this->attention = $attention;
        $this->addition = $addition;
        $this->street2 = $street2;
    }

    public function toArray()
    {
        return [
            'name' => "$this->name",
            'street' => "$this->street",
            'nr' => "$this->nr",
            'postalCode' => "$this->postalCode",
            'city' => "$this->city",
            'country' => "$this->country",
            'email' => "$this->email",
            'attention' => "$this->attention",
            'addition' => "$this->addition",
            'street2' => "$this->street2",
        ];
    }
}
