@extends('layoutes.sidebarAdmin')

@section('contentAdmin')
<div class="container col-xxl-8 py-5">
    <div class="card bg-white p-4 shadow rounded-4 border-0">

        <div class="d-flex justify-content-between mb-4">
            <div>
                <h4>Data Halaman: {{ $page }}</h4> <!-- Menampilkan page yang dipilih -->
            </div>
            <!--<div>
                <a href="/createHalamanAdmin" class="btn btn-primary">Create Halaman</a>
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
                        <th>Page</th>                      
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($halamans as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->page }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>
                                <a href="/halamanAdmin/editHalamanAdmin/{{ $item->id }}" class="btn btn-success">Edit</a>
                                <!--<form action="/deleteHalamanAdmin/{{ $item->id }}" method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus ?')">
                                        Delete
                                    </button>
                                </form>-->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

