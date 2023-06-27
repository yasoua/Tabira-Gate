<?php

namespace App\Http\Controllers;

use App\Models\Cource;
use App\Models\Lead;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\If_;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leads = Lead::all();
        if ($leads->where('gender', 1)){
            $gender = 'male';
        }else{
            $gender = 'female';
        }
        return view('leads.index',['leads' => $leads , 'gender' => $gender]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $attributes = $request->validate([
            'course_id' => 'required',
            'name' => ['required','string','max:255'],
            'email' => 'string|email|max:255',
            'phone' => 'string|max:2048',
            'gender' => 'required|in:0,1',
            'age' => 'date|max:255',
            'type_id' => 'required',
            'language_id' => 'required',


//            'payment_id' => 'required|in:0,1',

        ]);
//        dd($attributes);

        $lead = new Lead();

        $lead->course_id = $request->course_id;
        $lead->name = $request->name;
        $lead->email  = $request->email;
        $lead->phone = $request->phone;
        $lead->gender = $request->gender;
        $lead->age = $request->age;
        $lead->type_id = $request->type_id;
        $lead->language_id  = $request->language_id;

        $lead->save();

        session()->flash('flash_icon', 'success');
        session()->flash('flash_message', 'تم التسجيل بنجاح');

        session()->flash('register_success');

//        return redirect()->to(url()->current());
//        dd(redirect()->back());


        return redirect()->back();

    }


    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Lead::destroy($id);
        session()->flash('flash_icon', 'success');
        session()->flash('flash_message', 'Lead deleted successfully');
        return response()->json(['status' => 'success']);
    }


}
