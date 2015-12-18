<?php
require_once 'GithubApi.php';

$repos = new GithubApi();
$repos->getRepos("andela-cganga");