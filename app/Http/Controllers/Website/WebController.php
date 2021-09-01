<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return view('website.base');
//        return view('layout.base');
    }

}
