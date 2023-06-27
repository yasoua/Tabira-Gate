<?php

namespace App\Http\Controllers;

use App\Models\Cource;
use App\Models\Service;
use Illuminate\Http\Request;

class CourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Cource::all();
        return view('courses.index',['courses' => $courses]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create',['services' => Service::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required','string','max:255'],
            'description' => 'required|string|max:255',
            'picture' => 'required|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|string|max:255',
//            'discount' => 'required|string|max:255',
//            'status' => 'required|in:0,1',
//            'expire_at' => 'required|date_format:Y-m-d'
        ]);

        $course = new Cource();
        $course->service_id = $request->service_id;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->price = $request->price;
//        $cource->discount = $request->discount;
//        $->status = $request->status;
//        $ad->expire_at = $request->expire_at;
//        $ad->notes = $request->notes;
        $course->added_by = auth()->user()->id;
//        $ad->public_link = md5(Carbon::now());

        if (request()->hasFile('picture')) {
            $image = request()->file('picture');

            $extention = $image->getClientOriginalExtension();

            $filename = time().'.'.$extention;

            $image->move('images',$filename);

            $course->picture = $filename;
        }

        $course->save();

        session()->flash('flash_icon', 'success');
        session()->flash('flash_message', 'course added successfully');

        return redirect(route('dashboard'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Cource $cource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cource $cource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cource $cource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cource::destroy($id);
        session()->flash('flash_icon', 'success');
        session()->flash('flash_message', 'Course deleted successfully');
        return response()->json(['status' => 'success']);
    }
    public function publicShow($publicLink)
    {
        $course = Cource::where('public_link', $publicLink)->first();
        $currentDate = Carbon::now();

        if (($currentDate->greaterThan(Carbon::parse($course->expire_at)->endOfDay())) /*|| ($course->status == 0)*/)
        {
            $course->valid = false;
        }
        else
        {
            $course->valid = true;
        }

        return view('lead.register', ['course' => $course]);
    }
}
