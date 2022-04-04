<?php


namespace App\Http\Controllers;


class ProjectController
{
    public function index()
    {
        return view('dashboard.project.projectList', []);
    }
}
