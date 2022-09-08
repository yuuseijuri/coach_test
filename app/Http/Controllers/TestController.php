<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;

class TestController extends Controller
{
    public function index() {
        $tests = Test::all();
        return view('index', ['tests' => $tests]);  
    }
    public function post(TestRequest $request) {
        return view('thanks');
    }
    public function create(TestRequest $request) {
        $form = $request->all();
        Test::create($form);
        return redirect('/');
    }
}
