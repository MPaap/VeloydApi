###### Package still in development feel free to contribute.

# app.veloyd.nl PHP API

`composer require m-paap/veloyd-api`

## Examples

Set up parcel

`$veloyd = new \Veloyd\Parcel($api_key, $test_mode);`

Get single parcel

`$veloyd->get($parcel_id)`

Get Possible options
```
$address = new \Veloyd\Resources\Address(
    $name,
    $street,
    $nr,
    $postalCode,
    $city,
    $county,
    $email,
    $attention,
    $addition,
    $street2
);

$parcel = $veloyd->options(
    $address,
    $options
);
```

Create parcel delivery request
```
$address = new \Veloyd\Resources\Address(
    $name,
    $street,
    $nr,
    $postalCode,
    $city,
    $county,
    $email,
    $attention,
    $addition,
    $street2
);

$parcel = $veloyd->create(
    $address,
    $options,
    $reference
);
```
