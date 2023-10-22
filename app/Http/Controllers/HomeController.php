<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    private $homeData;
    public function __construct()
    {
        $this->homeData=json_decode(file_get_contents(storage_path('app/public/data/home.json')),true);
    }
    public function index()
    {
        $data = $this->homeData;
        return view("index",compact('data'));
    }
}
