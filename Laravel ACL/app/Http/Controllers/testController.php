<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('permission:test')->only('index');
        $this->middleware('permission:test2')->only('test2');
    }

    public function index() {
      return view('test');
    }

    public function test2() {
        return view('test');
    }
}
