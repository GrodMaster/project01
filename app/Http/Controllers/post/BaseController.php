<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use App\Services\Post\Service;

class BaseController extends Controller
{
    public $srevice;

    public function __construct(Service $srevice)
    {
        $this->srevice = $srevice;

    }
}
