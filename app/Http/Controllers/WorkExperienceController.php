<?php

namespace App\Http\Controllers;


class WorkExperienceController extends Controller
{
    private $workExperience;
    public function __construct()
    {
        $this->workExperience=json_decode(file_get_contents(storage_path('app/public/data/work.json')),true);
    }
    public function index()
    {
        $data =  $this->workExperience;
        return view("workExperience",compact('data'));
    }
}
