<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $user='Muhammed Ebied';
      return view('admin.index',compact('user'));
   }
}
