<?php

namespace PHPDocker\Api;

use PHPDocker\Cmd\DockerCmd;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

abstract class AbstractApi
{
    /** @var string */
    protected $management = '';

    /** @var DockerCmd */
    private $cmd;

    /**
     * AbstractClient constructor.
     *
     * @param DockerCmd $cmd
     */
    public function __construct(DockerCmd $cmd)
    {
        $this->cmd = $cmd;
    }

    /**
     * @param string       $command
     * @param string|array $params
     *
     * @return array
     */
    public function exec(string $command, $params = []) : array
    {
        $this->cmd
            ->setManagement($this->management)
            ->setCommand($command)
            ->setParams((array) $params)
        ;

//        dd($this->cmd->toArray());

        $process = new Process($this->cmd->toArray());
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        if ($this->cmd->getFormat())
        {
            $lines = explode("\n", $process->getOutput());
            $items = [];

            foreach ($lines as $line) {
                if ($line) {
                    $items[] = json_decode($line);
                }
            }

            $this->cmd->setFormat(false);

            return $items;
        }

        return json_decode($process->getOutput());
    }

    /**
     *
     * @return self
     */
    public function withFormat()
    {
        $this->cmd->setFormat(true);

        return $this;
    }
}
