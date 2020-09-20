<?php

namespace PHPDocker\Api\Docker;

use PHPDocker\Api\AbstractApi;

class ContainerApi extends AbstractApi
{
    /**
     * @return array
     */
    public function ls()
    {
        return $this->fetch('/containers/json');
    }
}
