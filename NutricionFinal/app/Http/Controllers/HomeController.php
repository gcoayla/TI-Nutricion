<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke()
    {
        $alimentos = DB::select('select nombre from alimentos');
        return view('welcome', ['alimentos'=>$alimentos]);
    }

    public function login()
    {
        return view('login');
    }
}
