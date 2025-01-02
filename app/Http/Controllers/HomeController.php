<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HomeService;


class HomeController extends Controller
{
    protected HomeService $service;

    public function __construct(HomeService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('home', $this->service->index());
    }
}
