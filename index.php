<?php
require 'vendor/autoload.php';
use Vundi\Checkpoint1\GithubApi;
use Vundi\Checkpoint1\EvangelistStatus;

$user = new EvangelistStatus("andela-cvundi");
echo $user->getStatus();