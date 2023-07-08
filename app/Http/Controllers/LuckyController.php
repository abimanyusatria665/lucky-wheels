<?php

namespace App\Http\Controllers;

use App\Models\Lucky;
use Illuminate\Http\Request;

class LuckyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Lucky::all();

        return view('create_data', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'prize' => 'required',
        ]);

        Lucky::create([
            'name' => $request->name,
            'prize' => $request->prize,
        ]);

        return redirect('/create')->with('successCreate', 'Successfully Create Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lucky $lucky)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lucky $lucky)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lucky $lucky)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lucky $lucky)
    {
    }

    public function getLuckyData()
    {
        $data = Lucky::all();

        return $data;
    }
}
