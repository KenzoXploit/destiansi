@extends('dashboard.layout')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Data Wisata</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <a href="{{ route('dashboard.tambah') }}" class="btn btn-primary mb-3">+ Tambah Wisata</a>

        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Alamat (Google Maps)</th>
                        <th>Sejarah</th>
                        <th>Jam Buka</th>
                        <th>Fasilitas</th>
                        <th>Kontak</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->id_destinasi }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>
                            @if($d->gambar)
                                <img src="{{ asset('uploads/' . $d->gambar) }}" width="100">
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ $d->kategori }}</td>
                        <td><a href="{{ $d->alamat }}" target="_blank">Lihat Lokasi</a></td>
                        <td>{{ \Illuminate\Support\Str::limit($d->sejarah, 100) }}</td>
                        <td>{{ $d->jam_buka }}</td>
                        <td>{{ $d->fasilitas }}</td>
                        <td>{{ $d->kontak }}</td>
                        <td>
                            <!-- Tombol Modal Edit -->
                            <button type="button" class="btn btn-sm btn-warning mb-1"
                                    data-toggle="modal" data-target="#editModal{{ $d->id_destinasi }}">
                                <i class="fas fa-edit"></i> Edit
                            </button>

                            <!-- Form Hapus -->
                            <form action="{{ route('dashboard.hapus', $d->id_destinasi) }}" method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?');"
                                  style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal Edit -->
                    <div class="modal fade" id="editModal{{ $d->id_destinasi }}" tabindex="-1"
                         role="dialog" aria-labelledby="editModalLabel{{ $d->id_destinasi }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <form action="{{ route('dashboard.update', $d->id_destinasi) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel{{ $d->id_destinasi }}">Edit Data Wisata</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body row">
                                        <div class="mb-3 col-md-6">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" value="{{ $d->nama }}" required>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label>Kategori</label>
                                            <select name="kategori" class="form-control" required>
                                                <option value="Objek Wisata Religi" {{ $d->kategori == 'Objek Wisata Religi' ? 'selected' : '' }}>Objek Wisata Religi</option>
                                                <option value="Objek Wisata Mangrove" {{ $d->kategori == 'Objek Wisata Mangrove' ? 'selected' : '' }}>Objek Wisata Mangrove</option>
                                                <option value="Objek Wisata Sejarah" {{ $d->kategori == 'Objek Wisata Sejarah' ? 'selected' : '' }}>Objek Wisata Sejarah</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label>Alamat (Google Maps)</label>
                                            <input type="text" name="alamat" class="form-control" value="{{ $d->alamat }}">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label>Jam Buka</label>
                                            <input type="text" name="jam_buka" class="form-control" value="{{ $d->jam_buka }}">
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label>Sejarah</label>
                                            <textarea name="sejarah" class="form-control">{{ $d->sejarah }}</textarea>
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label>Fasilitas</label>
                                            <input type="text" name="fasilitas" class="form-control" value="{{ $d->fasilitas }}">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label>Kontak</label>
                                            <input type="text" name="kontak" class="form-control" value="{{ $d->kontak }}">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label>Gambar (kosongkan jika tidak diubah)</label>
                                            <input type="file" name="gambar" class="form-control">
                                            @if($d->gambar)
                                                <img src="{{ asset('uploads/' . $d->gambar) }}" width="100" class="mt-2">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
