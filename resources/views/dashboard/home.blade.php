@extends('dashboard.layout')

@section('content')
{{-- Font Merienda --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@800&display=swap" rel="stylesheet">

{{-- Style khusus untuk branding dan responsif --}}
<style>
    .brand-merienda {
        font-family: "Merienda", cursive;
        font-weight: 800;
    }

    .centered-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 80vh;
        text-align: center;
        padding: 20px;
    }

    @media (max-width: 768px) {
        .centered-container img {
            height: 90px;
        }

        .centered-container h3 {
            font-size: 1.2rem;
        }
    }
</style>

<div class="centered-container">
    <img src="https://kenzo-fdl.my.id/TheBoys/logonav.png" alt="Logo Pariwisata Sulsel" style="height: 220px;" class="mb-3">

    <h3 class="text-secondary fw-bold brand-merienda">PARIWISATA PROVINSI SULAWESI SELATAN</h3>

    <a href="/" class="btn btn-primary mt-4">Lihat Web</a>

    <footer class="mt-5 text-muted">
        <small>COPYRIGHT © PARIWISATA SULSEL 2025</small>
    </footer>
</div>
@endsection
