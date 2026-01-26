<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashC extends Controller
{
  // Dashboard umum (admin)
  public function index()
  {
    return view('backend.dash');
  }
}
