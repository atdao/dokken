<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use PHPDocker\Api\DockerApi;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    /** @var DockerApi */
    protected $docker;

    /**
     * Controller constructor.
     *
     * @param DockerApi $dockerApi
     */
    public function __construct(DockerApi $dockerApi)
    {
        $this->docker = $dockerApi;
    }
}
