<?php

namespace PHPDocker\Api\Docker;

use PHPDocker\Api\AbstractApi;

class NetworkApi extends AbstractApi
{
    protected $management = 'network';

    /**
     * @return array
     */
    public function ls()
    {
        return $this->withFormat()
            ->exec('ls');
    }

    /**
     * @param string $id
     *
     * @return array
     */
    public function inspect(string $id)
    {
        return $this->fetch('/networks/' . $id);
    }
}
