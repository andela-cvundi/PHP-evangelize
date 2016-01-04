<?php
require 'vendor/autoload.php';

use Vundi\Checkpoint1\GithubApi;
use Vundi\Checkpoint1\EvangelistStatus;

try {
    $user = new EvangelistStatus();
    echo $user->getStatus();
} catch (Exception $e) {
    echo $e->getMessage();
}

