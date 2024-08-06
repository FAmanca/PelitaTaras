@extends('layouts.main')

@section('container')
    <div class="srq">
        <form action="{{ route('srq.submit') }}" method="POST" style="display: inline;" class="fform-check form-check-inline">
            @csrf
            <h1 style="text-align: center">Self Reporting Questionnaire (SRQ-29)</h1>
            @foreach ($kuis as $k)
                <div class="soal mt-5">
                    <div class="options">
                        <label for="pilihan{{ $k->nomor }}" class="lpilihan">{{ $k->nomor }}.
                            {{ $k->soal }}</label> <br>
                        <select name="question{{ $k->nomor }}" id="pilihan{{ $k->nomor }}" class="opsi" required>
                            <option value="" disabled selected>Pilih</option>
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>
                </div>
            @endforeach
            <br>
            <div>
                <button type="submit" class="btn btn-success" style="width: 100%;">Kirim Tes</button>
            </div>
        </form>
    </div>
@endsection
