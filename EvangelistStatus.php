<?php
class EvangelistStatus
{
    protected $username;
    public function __construct(Evangelist $username)
    {
        $this->username = $username;
    }

    public function getStatus()
    {

    }
}