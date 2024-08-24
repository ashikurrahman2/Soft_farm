<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\about;
// use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;

class AboutofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // protected $toastr;
    // public function __construct(ToastrInterface $toastr)
    // {
    //     $this->middleware('auth');
    //     $this->toastr = $toastr;
    // }
    public function index()
    {
        // Retrieve all about records from the database
        $abouts = about::all();
        // Show the page
        return view('backend.Pages.About.index', compact('abouts'));
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
        about::newAbouts($request);
        return back()->with('success', 'About created successfully.');
        // $this->toastr->success('About Updated successfully!');
        // return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(about $abouts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(about $about)
    {
        // return response()->json($about);
        return view('backend.Pages.About.edit', compact('about'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, about $about)
    {
        // Validation for updating an existing About record
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'satisfied_customer' => 'required|integer|min:0',
            'completion_project' => 'required|integer|min:0',
            'experience_team' => 'required|integer|min:0',
            'winning_awards' => 'nullable|integer|min:0',
        ]);
        // Assuming updateAbouts is a custom method you created in your About model
        about::updateAbouts($request, $about);
        return back()->with('success', 'About updated successfully.');
        // $this->toastr->success('About Updated successfully!');
        // return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(about $abouts)
    {
        about::deleteAbouts($abouts);
        return back()->with('success', 'About deleted successfully.');
        // $this->toastr->success('About deleted successfully!');
        // return back();
    }
}

