<?php

namespace App\Http\Controllers;

use App\Models\Kuis;
use Illuminate\Http\Request;

class KuisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kuis', [
            "title" => "Kuis SRQ 29",
        ]);
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
    public function show(Kuis $kuis)
    {
        $kuis = Kuis::all();
        return view('srq29', [
            "title" => "SRQ 29",
            "kuis" => $kuis
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kuis $kuis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kuis $kuis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kuis $kuis)
    {
        //
    }
}
