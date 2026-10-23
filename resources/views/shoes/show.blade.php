
@extends('layouts.app')

@section('title', $shoe->name . ' - ADI SPORT SHOES STATION')

@section('content')
<div class="container py-5">

    <a href="{{ url('/shoes') }}" class="btn btn-outline-dark mb-4">
        &larr; Kembali ke Daftar Sepatu
    </a>

    <div class="card shadow-sm border-0">
        <div class="row g-0">

            <div class="col-md-5 text-center p-4">
                <img
                    src="{{ asset('assets/images/' . $shoe->image) }}"
                    alt="{{ $shoe->name }}"
                    class="img-fluid"
                    style="max-height: 350px; object-fit: contain;"
                >
            </div>

            <div class="col-md-7">
                <div class="card-body p-4">

                    <h1 class="fw-bold">{{ $shoe->name }}</h1>

                    <p class="text-secondary">
                        ADI SPORT SHOES STATION
                    </p>

                    <hr>

                    <p>
                        <strong>Merek:</strong> {{ $shoe->brand }}
                    </p>

                    <p>
                        <strong>Ukuran:</strong> {{ $shoe->size_range }}
                    </p>

                    <p>
                        <strong>Jenis olahraga:</strong> {{ $shoe->sport_type }}
                    </p>

                    <h3 class="text-primary fw-bold mt-4">
                        Rp {{ number_format($shoe->price, 0, ',', '.') }}
                    </h3>

                    <p class="text-secondary mt-3">
                        Sepatu olahraga pilihan untuk mendukung
                        aktivitas dan kenyamananmu.
                    </p>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection
