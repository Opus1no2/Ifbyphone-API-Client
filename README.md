Ifbyphone API Client
====================
 
This client provides developers with a framework they can use to quickly take advantage of Ifbyphone's API.

Installation
------------

Installation is conveniently provided via [Composer][2].

To get started, install composer in your project:

```sh
$ curl -s https://getcomposer.org/installer | php
```

Next, add a composer.json file containing the following:

```js
}
    "require": {
        "ifbyphone/api-client": "dev-master"
    }
}
```

Finall, install!

```sh
$ php composer.phar install
```

Usage
-----

Using the Ifbyphone API client is easy:

``` php
<?php

use Ifbyphone\Client;

$client = new Client('YOUR API KEY');
$client->api('sms')->(array(
    'to' => 1112223333,
    'from => '4445556666,
    'message' => 'Test message!'
));

```
Method chaining is also supported:

```php
<?php

use Ifbyphone\Client;

$client = new Client('YOUR API KEY');
$client->api('sms')->to(1112223333)
    ->from(4445556666)
    ->message('Test message!');
```
