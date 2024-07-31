<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Kuis;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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

    public function submit(Request $request)
    {
        //H:i:s
        $tanggalWaktu = new DateTime();
        $tanggal = $tanggalWaktu->format('j F Y');
        $score = 0;
        foreach ($request->all() as $key => $value) {
            if ($value === 'ya') {
                $score++;
            }
        }
        $depression = false;
        $substanceAbuse = false;
        $psychoticDisorder = false;
        $ptsd = false;

        $responses = $request->all();

        $count1to20 = 0;
        for ($i = 1; $i <= 20; $i++) {
            if (isset($responses["question$i"]) && $responses["question$i"] === 'ya') {
                $count1to20++;
            }
        }
        if ($count1to20 >= 5) {
            $depression = true;
        }

        // Check for substance abuse (question 21)
        if (isset($responses["question21"]) && $responses["question21"] === 'ya') {
            $substanceAbuse = true;
        }

        // Check for psychotic disorder (questions 22-24)
        for ($i = 22; $i <= 24; $i++) {
            if (isset($responses["question$i"]) && $responses["question$i"] === 'ya') {
                $psychoticDisorder = true;
                break;
            }
        }

        // Check for PTSD (questions 25-29)
        for ($i = 25; $i <= 29; $i++) {
            if (isset($responses["question$i"]) && $responses["question$i"] === 'ya') {
                $ptsd = true;
                break;
            }
        }

        return view('result', [
            'score' => $score,
            'depression' => $depression,
            'substanceAbuse' => $substanceAbuse,
            'psychoticDisorder' => $psychoticDisorder,
            'ptsd' => $ptsd,
            'title' => 'Hasil Test',
            'tanggalWaktu' => $tanggal
        ]);


    }
}
