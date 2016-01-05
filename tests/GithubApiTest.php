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
    protected $user;

    public function setup()
    {
        $this->user = new GithubApi("andela-cvundi");
    }

    public function testGithubApiCallReturnsNumberOfRepos()
    {
        $repos = $this->user->getRepos();
        $this->assertInternalType('int', $repos);
    }

    public function testUsernameIsNotNull()
    {
        $this->assertNotNull($this->user);
    }

    public function testNameEnteredIsOfTypeString()
    {
        $type = $this->user->getUsername();
        $this->assertInternalType('string', $type);
    }

    /**
     * @expectedException Vundi\Checkpoint1\EvangelizeException
     */
    public function testThrowsAnExceptionIfNoUsernameISPassed()
    {
        $user = new GithubApi();
    }

    /**
     * @expectedException Vundi\Checkpoint1\EvangelizeException
     */
    public function testThrowsAnExceptionIfUsernamePassedIsNotAValidGithubUsername()
    {
        $user = new GithubApi("hdjdjd");
        $user->getRepos();
    }

}
