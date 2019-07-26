<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shoe;
use App\Brand;
use App\Type;

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
        $shoes = Shoe::count();
        $brands = Brand::count();
        $types = Type::count();
        return view('home', compact('shoes', 'brands', 'types'));
    }
}
