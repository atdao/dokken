<?php

namespace PHPDocker\Api\Docker;

use PHPDocker\Api\AbstractApi;

class NodeApi extends AbstractApi
{
    protected $management = 'node';

    /**
     * @return array
     */
    public function ls()
    {
        return $this->withFormat()
            ->exec('ls');
    }
}
