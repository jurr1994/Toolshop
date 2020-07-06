<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderlistController extends Controller
{
    public function index()
    {
     return view("pages.orderlist"); 
}
