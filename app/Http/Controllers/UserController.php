<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function dataList() {
        $payload['title'] = 'Data List';
        $payload['user'] = 'Aqil Jawadal Furqon';

        $data['data'] = User::all();
        return view('layouts.data-list', $payload, $data);
    }
}
