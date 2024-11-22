<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(Request $request){
        $data = array('title' => 'Dashboard');
        return view('dashboard.index', $data);
}      

}
