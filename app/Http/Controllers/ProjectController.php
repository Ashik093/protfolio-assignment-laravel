<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    private  $projects;
    public function __construct()
    {
        $this->projects = json_decode(file_get_contents(storage_path('app/public/data/project.json')),true);
    }
    public function index()
    {
        $data = $this->projects;
        return view("project",compact('data'));
    }
    public function show(int $id)
    {
        $data = null;
        foreach ($this->projects['projects'] as $item) {
            if ($item['id'] == $id) {
                $data = $item;
                break;
            }
        }
        // return $data;
        if ($data) {
            return view("singleProject", compact('data'));
        } else {
            return abort(404);
        }
    }
}
