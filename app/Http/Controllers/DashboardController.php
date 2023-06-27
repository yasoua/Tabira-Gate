<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Service;
use App\Models\Cource;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalServices= Service::all()->count();
        $totalCourses= Cource::all()->count();
        $totaleads= Lead::all()->count();

////        dd($customerOrders);
//        $user = auth()->user()->id;
//        $customerOrders= Order::where('added_by' , $user)->count();


        return view('dashboard',['totalServices'=>$totalServices, 'totalCourses'=>$totalCourses, 'totaleads'=>$totaleads]);
    }
}
