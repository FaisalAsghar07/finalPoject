<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\driver;
use App\Models\orders;
use App\Models\pizza;
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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = customer::get();
        $drivers = driver::get();
        $pizzas = pizza::get();
        $orders = orders::get();
        return view('home',compact('customers','drivers','pizzas','orders'));
    }
}
