<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class EditorController extends Controller
{
	       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('editor',['except'=>['test','test1']]);
    }

    public function index(){
    	return view('editor.home');
    }

    public function test(){
    	return 'This test access are everybody';
    }

    public function test1(){
    	return 'This test access are everybody also';
    }
}
