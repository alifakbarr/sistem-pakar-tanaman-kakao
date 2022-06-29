<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users\check');
    }
}
