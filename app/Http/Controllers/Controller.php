<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function MyCourses()
    {
        return view('dashboard.module.MyCourses');
    }
}
