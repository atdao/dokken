<?php

namespace PHPDocker\Api\Docker;

use Illuminate\Support\Collection;
use PHPDocker\Api\AbstractApi;

class StackApi extends AbstractApi
{
    protected $management = 'stack';

    /**
     * @return Collection
     */
    public function ls()
    {
        return collect($this->withFormat()
            ->exec('ls'));
    }

    /**
     * @param string $id
     * @return Collection
     */
    public function services(string $id)
    {
        $items = collect($this->withFormat()
        ->exec('services', $id));

        return $items->sortBy('Name');
    }
}
