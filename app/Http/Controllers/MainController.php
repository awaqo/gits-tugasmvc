<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $payload['title'] = 'Home';
        $payload['user'] = 'Aqil Jawadal Furqon';
        return view('layouts.home', $payload);
    }

    public function about() {
        $payload['title'] = 'About Me';
        $payload['user'] = 'Aqil Jawadal Furqon';
        return view('layouts.about', $payload);
    }

    public function contact() {
        $payload['title'] = 'Contact';
        $payload['user'] = 'Aqil Jawadal Furqon';
        return view('layouts.contact', $payload);
    }
}
