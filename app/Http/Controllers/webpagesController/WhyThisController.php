<?php

namespace App\Http\Controllers\webpagesController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhyThisController extends Controller
{
    public function onWhyThis(){
        return view('webpages.about');
    }
}
