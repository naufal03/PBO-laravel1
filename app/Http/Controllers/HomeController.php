<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
      //passing data user, categories, product
        $d['categories'] = Category::count();
        $d['product'] = Product::count();
        $d['user'] = User::count();
        return view('home', $d);
  }
  Public function adminPage()
  {
      return view('layout.adminHome');
  }
}
