<?php

namespace PHPDocker\Api\Docker;

use Illuminate\Support\Collection;
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

    /**
     * @param string $id
     * @return Collection
     */
    public function inspect(string $id)
    {
        return collect($this->exec('inspect', $id))->first();
    }
}
