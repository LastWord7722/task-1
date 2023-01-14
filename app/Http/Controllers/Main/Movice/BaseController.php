<?php

namespace App\Http\Controllers\Main\Movice;

use App\Http\Controllers\Controller;
use App\Service\Main\MovieService;

class BaseController extends Controller
{
    public $service;

    public function __construct(MovieService $service)
    {
        $this->service = $service;
    }

}