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

    public function __construct($username = null)
    {
        $this->username = $username;
        if (is_null($username)) {
            throw new \Exception("You have to pass in a username, Username cannot be null", 1);
        }
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
        $res = $client->request('GET', $url, ['exceptions' => false]);
        if ($res->getStatusCode() == 404) {
            throw new \Exception("The username you passed is not a valid Github username", 1);
        }
        $decoded = json_decode($res->getBody(), true);
        $number = count($decoded);
        return $number;
    }

}