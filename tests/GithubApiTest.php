<?php
/**
 *  @author chris.vundi
 *  This tests the GithubApi class, which returns
 *  the number of repos one has provided they input
 *  the username.
 */
namespace Vundi\Checkpoint1\Test;

use Vundi\Checkpoint1\GithubApi;
use PHPUnit_Framework_TestCase;

class GithubApiTest extends PHPUnit_Framework_TestCase
{

    public function setup()
    {
        $this->user = new GithubApi("andela-cvundi");
    }

    public function testGithubApiCallReturnsNumberOfRepos()
    {
        //$user = new GithubApi("andela-cvundi");
        $repos = $this->user->getRepos();
        $this->assertInternalType('int', $repos);
    }

    public function testUsernameIsNotNull()
    {
        //$user = new GithubApi("andela-cvundi");
        $this->assertNotNull($this->user);
    }

    public function testNameEnteredIsOfTypeString()
    {
        //$user = new GithubApi("andela-cvundi");
        $type = $this->user->getUsername();
        $this->assertInternalType('string', $type);
    }

}
