<?php

namespace PHPDocker\Cmd;

use Illuminate\Contracts\Support\Arrayable;

class DockerCmd implements Arrayable
{
    /** @var string */
    private $host = 'tcp://localhost:1337';

    /** @var string */
    private $formatStr = '{{json .}}';

    /** @var string */
    private $management;

    /** @var array */
    private $command = [];

    /** @var array */
    private $params = [];

    /** @var bool */
    private $format = false;

    /**
     * @param string $cmd
     *
     * @return self
     */
    public function setManagement(string $cmd)
    {
        $this->management = $cmd;

        return $this;
    }

    /**
     * @param string|array $cmd
     *
     * @return self
     */
    public function setCommand($cmd)
    {
        $this->command = (array) $cmd;

        return $this;
    }

    /**
     * @param array $params
     *
     * @return self
     */
    public function setParams(array $params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * @param bool $format
     *
     * @return self
     */
    public function setFormat(bool $format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return bool
     */
    public function getFormat() : bool
    {
        return $this->format;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        // docker -H [host] [management] [command]
        $command = [
            'docker',
            '-H', $this->host,
        ];

        if ($this->management) {
            $command[] = $this->management;
        }

        $command = array_merge($command, $this->command);

        if ($this->params) {
            $command = array_merge($command, $this->params);
        }

        if ($this->format) {
            $command = array_merge($command, ['--format', $this->formatStr]);
        }

        return $command;
    }
}
