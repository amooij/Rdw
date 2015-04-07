Overview
========

This component provides classes to retrieve data from the RDW

Installation
============

Add the component to your `composer.json` file:

```javascript
require: {
    // ...
    "nettob/rdw": "1.*"
    // ...
}
```

Then run a composer update:

```shell
composer.phar update
# OR
composer.phar update nettob/rdw # to only update the component
```

Usage
=====

## Service

### Start

```
$apiKey = "YOURAPIKEY"; # [required] the api key from your dataset on azure.
$contentType = "json" # currently only json could be used.
$kentekenRepository = new Nettob\Component\Rdw\Model\KentekenRepository($apiKey, $contentType);
```

Both methods returns an array of Nettob\Component\Rdw\Model\Kenteken.

### FindAll

```
$limit = 100; # Limit of number plates.
$offset = 100; # offset of number plates.
$kentekenRepository->findAll($limit, $offset);
```

### FindBy

Currently only one property allowed.

```
$key = 'Kenteken'; # See Nettob\Component\Rdw\Model\Kenteken for the available properties.
$value = 'string'; # String or number to search for.
$type = Nettob\Component\Rdw\Model\KentekenRepository::TYPE_EQ #See Nettob\Component\Rdw\Model\Kenteken::getTypes for the available types.
$limit = 100; # Limit of number plates.
$offset = 100; # offset of number plates.
$kentekenRepository->findBy($key, $vale, $type, $limit, $offset);
```