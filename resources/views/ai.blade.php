{{-- @extends('layouts.main')

@section('container')
    <main>
        <h1 class="tengah">Keitaro | AI</h1>
        @if (isset($response))
            <p class="keitaro">Keitaro : {{ json_encode($response, JSON_PRETTY_PRINT) }}</p>
        @endif
        <div class="col-md-6 container fixed-bottom">
            <form action="{{ url('/ai') }}" method="post" class="input-group mb-3">
                @csrf
                <input id="content" name="content" class="form-control form-control-lg" placeholder="Tulis pesan Anda di sini...">
                <button type="submit" class="btn btn-success">Kirim</button>
            </form>
        </div>
    </main>
@endsection --}}
@extends('layouts.main')

@section('container')
    <main>
        <h1 class="tengah">Yume | AI</h1>
        <h6 class="tengah">Konsultasi Dengan AI</h6>
        <hr>
        @if (isset($response))
            <p class="keitaro" id="typingEffect"><strong>Yume :</strong> </p>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    let responseText = {!! json_encode($response, JSON_PRETTY_PRINT) !!};
                    let element = document.getElementById("typingEffect");
                    let text = JSON.stringify(responseText, null, 2);
                    let index = 0;

                    function typeEffect() {
                        if (index < text.length) {
                            element.innerHTML += text.charAt(index);
                            index++;
                            setTimeout(typeEffect, 30);
                        }
                    }

                    typeEffect();
                });
            </script>
        @endif
        <div class="col-md-6 container fixed-bottom">
            <form action="{{ url('/ai') }}" method="post" class="input-group mb-3">
                @csrf
                <input id="content" name="content" class="form-control form-control-lg" placeholder="Tulis pesan Anda di sini...">
                <button type="submit" class="btn btn-success">Kirim</button>
            </form>
            <p id="pesan">Yume masih dalam pengembangan.</p>
        </div>
    </main>
@endsection
