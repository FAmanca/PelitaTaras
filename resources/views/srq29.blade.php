@extends('layouts.main')

@section('container')
    <h1>Self Reporting Questionnaire (SRQ-29)</h1>
    <form action="" method="" style="display: inline;" class="fform-check form-check-inline">
        @foreach ($kuis as $k)
            {{-- SOAL --}}
            <div class="soal mt-5">
                <p class="">{{ $k->nomor }}. {{ $k->soal }}</p>
                <div class="options">
                    <label>
                        <input class="form-check-input" id="inlineCheckbox1" type="radio" name="question{{ $k->nomor }}" value="yes" required> Ya
                    </label>    
                    <label>
                        <input class="form-check-input" id="inlineCheckbox2" type="radio" name="question{{ $k->nomor }}" value="no"> Tidak
                    </label>
                </div>
            </div>
            {{-- AKHIR SOAL --}}
            @endforeach
            <br>
            <div>
                <button type="submit" class="btn btn-danger">Kirim Tes</button>
            </div>
    </form>
@endsection
