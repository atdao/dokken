<?php

namespace PHPDocker\Api\Docker;

use Illuminate\Support\Collection;
use PHPDocker\Api\AbstractApi;
use stdClass;

class ServiceApi extends AbstractApi
{
    protected $management = 'service';

    /**
     * @return Collection
     */
    public function ls()
    {
        $items = collect($this->withFormat()
            ->exec('ls'));

        return $items->sortBy('Name');
    }

    /**
     * @param string $id
     *
     * @return stdClass
     */
    public function inspect(string $id)
    {
        return collect($this->exec('inspect', $id))->first();
    }

    /**
     * @param string $id
     * @return Collection
     */
    public function ps(string $id)
    {
        return collect($this->withFormat()->exec('ps', [$id, '--no-trunc']));
    }
}
