<?php

namespace Vundi\Checkpoint1;
use Vundi\Checkpoint1\GithubApi;

class EvangelistStatus
{
    protected $username;
    protected $githubApi;

    public function __construct($username)
    {
        $this->username = $username;
        $this->githubApi = new GithubApi($this->username);
    }

    public function getStatus()
    {
        if ($this->githubApi->getRepos() >= 5 and $this->githubApi->getRepos() <= 10) {
            return "Yeah, I crown you Senior Evangelist. Thanks for making the world a better place";
        } elseif ($this->githubApi->getRepos() >=11 and $this->githubApi->getRepos() <= 20) {
            return "Keep Up The Good Work, I crown you Associate Evangelist";
        } elseif ($this->githubApi->getRepos() >= 21) {
            return "Damn It!!! Please make the world better, Oh Ye Prodigal Junior Evangelist";
        } else {
            return "You don't qualify to be called an eveangelist....whatsoever";
        }
    }


}