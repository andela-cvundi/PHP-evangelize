<?php
/**
 *  @author chris.vundi
 *  This class returns a status based on the
 *  number of repos the usename you passed as an
 *  argument has on github.
 */

namespace Vundi\Checkpoint1;

use Vundi\Checkpoint1\GithubApi;
use Vundi\Checkpoint1\Exceptions\NoUsernamePassed;

class EvangelistStatus
{
    /**
     * Github username
     * @var string
     */
    protected $username;

    /**
     * Bring in the functionality of the
     * github api class
     * @var obj
     */
    protected $githubApi;

    public function __construct($username = null)
    {
        if (is_null($username)) {
            throw new NoUsernamePassed("You have to pass in a username, Username cannot be null", 1);
        }

        $this->username = $username;
        $this->githubApi = new GithubApi($this->username);
    }

    /**
     * Will return a status depending on the number of repos you have
     * on github
     * @return string
     */
    public function getStatus()
    {
        if ($this->githubApi->getRepos() >= 5 && $this->githubApi->getRepos() <= 10) {
            return "Yeah, I crown you Senior Evangelist. Thanks for making the world a better place";
        } elseif ($this->githubApi->getRepos() >=11 && $this->githubApi->getRepos() <= 20) {
            return "Keep Up The Good Work, I crown you Associate Evangelist";
        } elseif ($this->githubApi->getRepos() >= 21) {
            return "Damn It!!! Please make the world better, Oh Ye Prodigal Junior Evangelist";
        } else {
            return "You don't qualify to be called an evangelist....whatsoever";
        }
    }


}