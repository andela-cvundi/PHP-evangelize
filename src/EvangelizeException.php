<?php

namespace Vundi\Checkpoint1;

use Exception;

/**
 * Custom Exception Class for PHP Evangelize
 */
class EvangelizeException extends \Exception
{
    // Message
    public function __construct($message, $code = 1, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    // custom string representation of object
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}