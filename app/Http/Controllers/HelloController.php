<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HelloController extends Controller
{
    public function showHelloWorld(): View{
 $data = [
    'header' => 'Controller Header',
    'descripstion' => 'Controller Description'
 ];
return view('hello-world', ['controller_data' => $data]);
    }
}
