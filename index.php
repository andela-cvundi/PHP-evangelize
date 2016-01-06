  <?php
require 'vendor/autoload.php';

use Vundi\Checkpoint1\GithubApi;
use Vundi\Checkpoint1\EvangelistStatus;
use Vundi\Checkpoint1\InvalidUsername;
use Vundi\Checkpoint1\NoUsernamePassed;


try {
    $user = new EvangelistStatus("andela-cvundi");
    echo $user->getStatus();
} catch (InvalidUsername $e) {
    echo $e->getMessage();
} catch (NoUsernamePassed $e) {
    echo $e->getMessage();
}

