<?php

namespace App\Http\Controllers;

use PHPDocker\Api\DockerApi;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
