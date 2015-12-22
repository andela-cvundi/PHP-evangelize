# PHP evangelize
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/andela-cvundi/PHP-evangelize/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/andela-cvundi/PHP-evangelize/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/andela-cvundi/PHP-evangelize/badges/build.png?b=master)](https://scrutinizer-ci.com/g/andela-cvundi/PHP-evangelize/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/andela-cvundi/PHP-evangelize/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/andela-cvundi/PHP-evangelize/?branch=master)

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

$user = new EvangelistStatus("github-username");
echo $user->getStatus();
```

## Credits

- [Christopher Vundi][link-author]

## License

The MIT License (MIT). Please see [License File](https://opensource.org/licenses/MIT) for more information.

[link-author]: https://github.com/andela-cvundi