<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IoTController extends Controller
{
    public function showSheet()
    {
        $sheetUrl = 'https://script.google.com/macros/s/AKfycbxtzAgsEKqey7F_znSsTBnClFpgfXHG0RW3-6zLXNWgmB-KaTqZr6b3T4r5jISk0B7zNw/exec'; // Ganti dengan URL Apps Script kamu
        $response = Http::get($sheetUrl);

        $data = $response->json(); // Parsing JSON dari Google Sheet

        return view('landingpage.moduls.iot', compact('data'));
    }
}
