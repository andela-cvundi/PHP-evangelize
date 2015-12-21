# PHP evangelize

PHP evangelize is a PHP package that tells a user what type of evangelist He/She is based of the number of public repositories they own on Github.


## Install

- composer require vundi/phpevangelize
- Run:
    composer install


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