<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected function lang_page(){
        return view('content.v_lang');
    }

    protected function en_page(){
        return view('content.v_en_page');
    }

    protected function de_page(){
        return view('content.v_de_page');
    }

    protected function fr_page(){
        return view('content.v_fr_page');
    }
}
