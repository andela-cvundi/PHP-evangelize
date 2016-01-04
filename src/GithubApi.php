<?php
/**
 *  @author chris.vundi
 *  This class makes a call to Github and returns
 *  the number of repos one owns provided a username
 *  is provided.
 */
namespace Vundi\Checkpoint1;
use GuzzleHttp\Client;

class GithubApi
{
    /**
     * Github username
     * @var string
     */
    protected $username;

    public function __construct($username)
    {
        $this->username = $username;
    }

    /**
     * Get username passed as the parameter
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Return an integer representing number of public repos
     * the username provided has on github
     * @return int
     */
    public function getRepos()
    {
        $url = "https://api.github.com/users/{$this->username}/repos";
        $client = new Client();
        //will return http response with the body in json format
        $res = $client->request('GET', $url);
        $decoded = json_decode($res->getBody(), true);
        $number = count($decoded);
        return $number;
    }

}
