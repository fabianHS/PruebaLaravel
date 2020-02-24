<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Request2Controller extends Controller
{
  public function index (Request $request){
    //dd($request);
    echo  $request->path();
    echo  $request->url();
    echo  $request->input($request->url());
    echo $request->fullUrl();
  }
}
