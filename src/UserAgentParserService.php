<?php

namespace AUserAgentParserService\dmitriy;

use InterfaceUA\dmitriy\UserAgentInterface;
use UAParser\Parser;

class UserAgentParserService implements UserAgentInterface
{
    protected $data;

    public function parse($user_agent)
    {
        $this->data = Parser::create()->parse($user_agent);
    }

    public function getBrowserName()
    {
        return $this->data->ua->toString();
    }

    public function getOsName()
    {
        return $this->data->os->toString();
    }
}
