<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        return view('index');
        
    }
    public function post() {
        return view('thanks');
    }
}
