<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Filial;
class HomeController extends Controller
{
  public function index()
  {
    $filiais = Filial::all();
    return view('home',compact('filiais'));
  }
}
