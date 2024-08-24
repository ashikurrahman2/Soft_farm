<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;

class ClientsController extends Controller
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
        return view('backend.Pages.Services.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
