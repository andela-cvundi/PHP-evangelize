<?php
/**
 *  @author chris.vundi
 *  This class makes a call to Github and returns
 *  the number of repos one owns provided a username
 *  is provided.
 */
namespace Vundi\Checkpoint1;

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
        $response = file_get_contents($url, false,self::getStreamContext());
        $decoded = json_decode($response, true);
        $number = count($decoded);
        return $number;
    }


    /**
     *  @return resource $context
     */
    public static function getStreamContext()
    {
        // This will solve the failed to open stream: HTTP request failed!
        // which happens when the  file being returned by file_get_contents
        // is too large
        $options  = [
                'http' => [
                    'user_agent' => '1.0.0'
                ]
            ];
        return stream_context_create($options);
    }

}
