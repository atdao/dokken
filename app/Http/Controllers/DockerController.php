<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use PHPDocker\Api\Docker;

class DockerController extends Controller
{
    /** @var DockerApi */
    private $docker;

    public function __construct(DockerApi $docker)
    {
        $this->docker = $docker;
    }

    public function index()
    {
//        dd($this->docker->node()->ls());

//        dd($this->docker->service()->ls());
//        dd($this->docker->node()->ls());


        $client = new Client();
        $res = $client->request('GET', 'unix:///var/run/docker.sock/nodes/ls');
        var_dump($res);
    }
}
