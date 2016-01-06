# PHP evangelize
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/andela-cvundi/PHP-evangelize/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/andela-cvundi/PHP-evangelize/?branch=master)
[![Build Status](https://travis-ci.org/andela-cvundi/PHP-evangelize.svg?branch=test)](https://travis-ci.org/andela-cvundi/PHP-evangelize)
[![Coverage Status](https://coveralls.io/repos/andela-cvundi/PHP-evangelize/badge.svg?branch=master&service=github)](https://coveralls.io/github/andela-cvundi/PHP-evangelize?branch=master)

PHP evangelize is a PHP package that tells a user what type of evangelist He/She is based on the number of public repositories they own on Github.

## Installation

Inside your project folder, run this
``` bash
$ composer require vundi/phpevangelize
$ composer install
```


## Sample Usage

``` php
 <?php

require 'vendor/autoload.php';

use Vundi\Checkpoint1\GithubApi;
use Vundi\Checkpoint1\EvangelistStatus;
use Vundi\Checkpoint1\Exceptions\InvalidUsername;
use Vundi\Checkpoint1\Exceptions\NoUsernamePassed;


try {
    $user = new EvangelistStatus("andela-cvundi");
    echo $user->getStatus();
} catch (InvalidUsername $e) {
    echo $e->getMessage();
} catch (NoUsernamePassed $e) {
    echo $e->getMessage();
}
```

## Credits

- [Christopher Vundi][link-author]

## License

The MIT License (MIT). Please see [License File](https://opensource.org/licenses/MIT) for more information.

[link-author]: https://github.com/andela-cvundi