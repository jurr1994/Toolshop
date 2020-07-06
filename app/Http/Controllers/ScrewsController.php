<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Screw;

class ScrewsController extends Controller
{
  public function index()
 {
     $screws = Screw::all();
     return view("pages.screws", compact('screws'));

}
 
}
