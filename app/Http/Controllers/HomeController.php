<?php

namespace App\Http\Controllers;
use App\Advertise;
use Illuminate\Http\Request;
use App\Product;
use TCG\Voyager\Models\Category;
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
    public function contact()
    {
        return view('contact');
    }
  public function msg()
    {
        return view('message');
    }
    public function index()
    {
        $products=Product::take(20)->get();
$categories=Category::whereNull('parent_id')->get();
$advertise=Advertise::take(2)->get();
        return view('home',['products'=>$products,'categories'=>$categories,'advertises'=>$advertise]);
    }
}
