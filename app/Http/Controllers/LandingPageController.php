<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LandingPageController extends Controller
{
    public function banner()
    {
        return view('landingpage.moduls.banner');
    }


    public function airquality()
    {
        $sheetUrl = 'https://script.google.com/macros/s/AKfycbxo9qZCs2cfVAqO-BAKx2hYjNlgemrO10Knw39Jvz9cNZ3CWdhMIyRi_YXGQuZogr4DYQ/exec'; // Ganti dengan URL Apps Script kamu
        $response = Http::get($sheetUrl);

        $data = $response->json(); // Parsing JSON dari Google Sheet
    
        return view('landingpage.moduls.airquality', compact('data'));
    }

    public function airqualityData()
    {
        $url = 'https://script.google.com/macros/s/AKfycbxo9qZCs2cfVAqO-BAKx2hYjNlgemrO10Knw39Jvz9cNZ3CWdhMIyRi_YXGQuZogr4DYQ/exec'; // Ganti dengan URL milikmu

        $response = Http::get($url);

        if ($response->successful()) {
            return response()->json($response->json());
        }

        return response()->json(['error' => 'Gagal mengambil data'], 500);
    }



    public function outdoor()
    {
        return view('landingpage.moduls.outdoor');
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
}
