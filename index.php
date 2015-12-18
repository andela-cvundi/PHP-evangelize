<?php
require_once 'GithubApi.php';
require_once 'EvangelistStatus.php';

$user = new EvangelistStatus("andela-cvundi");
echo $user->getStatus();