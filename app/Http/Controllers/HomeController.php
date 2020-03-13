<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SmartDog23\LaravelAzureFaceApi\Facades\LaravelAzureFaceApi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sample001()
    {
        // this sample will create a group and retrieve his info from the api

        $groupId = 'group-sample-001-'.time();

        $result = LaravelAzureFaceApi::largePersonGroup()->create()->execute($groupId, 'this is the description of the group - '.$groupId, 'this is a sample userData (optional)');
        dump($result);
        dump($result->getBody()->getContents());

        $result = LaravelAzureFaceApi::largePersonGroup()->get()->execute($groupId);
        dump($result);
        dump($result->getBody()->getContents());

        return view('home');
    }

    public function sample002()
    {
        // this sample will create a group and retrieve his info from the api
        // in this example it will run only in the first time, the others will return an error of the group already exists

        $groupId = 'group-sample-002';

        $result = LaravelAzureFaceApi::largePersonGroup()->create()->execute($groupId, 'this is the description of the group - '.$groupId, 'this is a sample userData (optional)');
        dump($result);
        dump($result->getBody()->getContents());

        $result = LaravelAzureFaceApi::largePersonGroup()->get()->execute($groupId);
        dump($result);
        dump($result->getBody()->getContents());

        return view('home');
    }
}
