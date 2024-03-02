<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function boardmain(){

        return view('board.main');
    }

    public function search(){

        return view('board.search');
    }
}
