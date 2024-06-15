@extends('layouts.main')

@section('container')
    <h1>Self Reporting Questionnaire (SRQ-29)</h1>
    <div class="kuis">
        @foreach ($kuis as $k)
            {{-- SOAL --}}
            <div class="soal mt-5">
                <p class="">{{ $k->nomor }}. {{ $k->soal }}</p>
                <div class="options">
                    <label>
                        <input type="radio" name="question{{ $k->nomor }}" value="yes" required> Ya
                    </label>
                    <label>
                        <input type="radio" name="question{{ $k->nomor }}" value="no"> Tidak
                    </label>
                </div>
            </div>
            {{-- AKHIR SOAL --}}
        @endforeach
    </div>
@endsection
