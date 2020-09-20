<?php

namespace PHPDocker\Api;

use PHPDocker\Api\Docker\ContainerApi;
use PHPDocker\Api\Docker\NetworkApi;
use PHPDocker\Api\Docker\NodeApi;
use PHPDocker\Api\Docker\ServiceApi;
use PHPDocker\Api\Docker\StackApi;
use PHPDocker\Api\Docker\SwarmApi;
use PHPDocker\Cmd\DockerCmd;

class DockerApi extends AbstractApi
{
    /** @var NodeApi */
    private $node;

    /** @var ServiceApi */
    private $service;

    /** @var ContainerApi */
    private $container;

    /** @var StackApi */
    private $stack;

    /** @var NetworkApi */
    private $network;

    /** @var SwarmApi */
    private $swarm;

    /**
     * DockerApi constructor.
     *
     * @parent DockerCmd $cmd
     */
    public function __construct(DockerCmd $cmd)
    {
        parent::__construct($cmd);

        $this->node = new NodeApi($cmd);
        $this->service = new ServiceApi($cmd);
        $this->container = new ContainerApi($cmd);
        $this->stack = new StackApi($cmd);
        $this->network = new NetworkApi($cmd);
        $this->swarm = new SwarmApi($cmd);
    }

    /**
     * @return ServiceApi
     */
    public function service()
    {
        return $this->service;
    }

    /**
     * @return NodeApi
     */
    public function node()
    {
        return $this->node;
    }

    /**
     * @return SwarmApi
     */
    public function swarm()
    {
        return $this->swarm;
    }

    /**
     * @return ContainerApi
     */
    public function container()
    {
        return $this->container;
    }

    /**
     * @return StackApi
     */
    public function stack()
    {
        return $this->stack;
    }

    /**
     * @return NetworkApi
     */
    public function network()
    {
        return $this->network;
    }
}
