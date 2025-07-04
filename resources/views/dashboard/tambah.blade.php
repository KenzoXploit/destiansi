@extends('dashboard.layout')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Tambah Data Wisata</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Nama Wisata</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control" accept="image/*">
            </div>

            <div class="mb-3">
                <label>Kategori</label>
                <select name="kategori" class="form-control" required>
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Objek Wisata Religi">Objek Wisata Religi</option>
                    <option value="Objek Wisata Mangrove">Objek Wisata Mangrove</option>
                    <option value="Objek Wisata Sejarah">Objek Wisata Sejarah</option>
                </select>
            </div>

            <div class="mb-3">
                <label>URL Google Maps</label>
                <input type="url" name="alamat" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Sejarah</label>
                <textarea name="sejarah" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label>Jam Buka</label>
                <input type="text" name="jam_buka" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Fasilitas</label>
                <input type="text" name="fasilitas" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Kontak</label>
                <input type="text" name="kontak" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
