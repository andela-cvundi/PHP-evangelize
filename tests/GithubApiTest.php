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

    public function testGithubApiCallReturnsNumberOfRepos()
    {
        $user = new GithubApi("andela-cvundi");
        $repos = $user->getRepos();
        $this->assertInternalType('int', $repos);
    }

    public function testUsernameIsNotNull()
    {
        $user = new GithubApi("andela-cvundi");
        $this->assertNotNull($user);
    }

    public function testNameEnteredIsOfTypeString()
    {
        $user = new GithubApi("andela-cvundi");
        $type = $user->getUsername();
        $this->assertinternalType('string', $type);
    }

}
