<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SmartDog23\AzureFaceApi\AzureFaceApi;
use SmartDog23\LaravelAzureFaceApi\Facades\LaravelAzureFaceApi;

class GroupController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $result = LaravelAzureFaceApi::largePersonGroup()->get()->execute('htest-25');
        dump($result->getBody()->getContents());
    }
}
