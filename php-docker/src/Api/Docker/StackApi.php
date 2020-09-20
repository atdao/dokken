<?php

namespace PHPDocker\Api\Docker;

use PHPDocker\Api\AbstractApi;

class StackApi extends AbstractApi
{
    protected $management = 'stack';

    public function ls()
    {
        return $this->withFormat()
            ->exec('ls');
    }
}
