<?php

namespace App\Http\Controllers;
Use App\Http\Controllers\FrontendControler;
use Illuminate\Http\Request;

class Frontend_controler extends Controller
{
  public function index()
  {
    return view('inc/admin/shop');
  }
  public function product()
  {
    return view('inc/admin/product');
  }
  public function about()
  {
    return view('inc/admin/about');
  }
  public function single()
  {
    return view('inc/admin/single');
  }
  public function service()
  {
    return view('inc/admin/service');
  }
  public function contact()
  {
    return view('inc/admin/contact');
  }
  public function admin()
  {
      return view ('admin/admin');
  }
}
