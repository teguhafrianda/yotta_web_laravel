<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function banner()
    {
        return view('landingpage.moduls.banner');
    }
    public function airquality()
    {
        return view('landingpage.moduls.airquality');
    }
    public function solardome()
    {
        return view('landingpage.moduls.solardome');
    }
    public function greenhouse()
    {
        return view('landingpage.moduls.greenhouse');
    }
    public function soilmanag()
    {
        return view('landingpage.moduls.soilmanag');
    }
    public function soiltest()
    {
        return view('landingpage.moduls.soiltest');
    }
    public function soilquality()
    {
        return view('landingpage.moduls.soilquality');
    }
}
