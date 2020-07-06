<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paint;
class PaintController extends Controller
{
    public function index()
   {
    $paints = Paint::all();
     return view("pages.paint", compact('paints'));
}
}
