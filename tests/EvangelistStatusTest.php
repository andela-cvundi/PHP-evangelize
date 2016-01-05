<?php
/**
 *  @author chris.vundi
 *  This tests the GithubApi class, which returns
 *  the number of repos one has provided they input
 *  the username.
 */
namespace Vundi\Checkpoint1\Test;

use Vundi\Checkpoint1\EvangelistStatus;
use PHPUnit_Framework_TestCase;

class EvangelistStatusTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException Vundi\Checkpoint1\EvangelizeException
     */
    public function testUserNameCannotBeNull()
    {
        $user = new EvangelistStatus();
    }
}