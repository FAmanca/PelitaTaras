<?php

namespace App\Http\Controllers;

use App\Models\Kuis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

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
        return view('createkuis');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nomor' => 'required|max:11',
                'soal' => 'required',
            ]);

            $kuis = new Kuis;
            $kuis->nomor = $validatedData['nomor'];
            $kuis->soal = $validatedData['soal'];
            $kuis->save();

            return redirect()->route('kelolakuis')->with('success', 'Postingan Berhasil Ditambahkan');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->route('kelolakuis')->with('error', 'Terjadi kesalahan. Mohon coba lagi nanti.');
        }
    }


    public function kelola(Request $request)
    {
        $kuis = Kuis::all();
        return view('kelolakuis', [
            "title" => "Kelola Kuis",
            "kuis" => $kuis
        ]);
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
