@extends('layoutes.sidebarAdmin')

@section('contentAdmin')
<div class="container col-xxl-8 py-5">
    <div class="card bg-white p-4 shadow rounded-4 border-0">

        <div class="d-flex justify-content-between mb-4">
            <div>
                <h4>Data Halaman: Beranda</h4> <!-- Menampilkan page yang dipilih -->
            </div>
           <!-- <div>
                <a href="{{ route('homepage.createHomepage') }}" class="btn btn-primary">Create Halaman</a>
            </div>-->
        </div>

        {{-- Pesan Sukses di Simpan dan di Update --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Informasi</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NO</th>      
                        <th>Content/Category</th>                      
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($homepages as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->content }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ Str::limit(strip_tags($item->desc), 50) }}</td> <!-- Menampilkan deskripsi dengan batasan tanpa tag HTML -->
                            <td>
                                @if($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" height="100" alt="{{ $item->judul }}">
                                @else
                                    <span> - </span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('homepage.editHomepage', $item->id) }}" class="btn btn-success">Edit</a>
                                <!--<form action="{{ route('homepage.deleteHomepage', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah anda yakin akan menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form> -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection