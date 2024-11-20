@extends('layoutes.sidebarAdmin') 

@section('contentAdmin')

<div class="pagetitle">
  <h1>Berita</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Berita</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
<div class="container col-xxl-8 py-5">
        <div class="card bg-white p-4 shadow rounded-4 border-0">

            <div class="d-flex justify-content-between mb-4">
                <div>
                    <h4>Data Artikel</h4>
                </div>
                <div>
                    <a href="../berita/createBerita" class="btn btn-primary">Create Artikel</a>
                </div>
            </div>

            {{-- Pesan Sukses di Simpan dan di Update --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Informasi</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            {{-- Pesan Sukses di Simpan dan di Update --}}

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Judul</th>
                            <th>Image</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($artikels as $artikel)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $artikel->judul }}</td>
                                <td>
                                   <!-- <img src="{{ asset('public/artikel/' . $artikel->image) }}" height="100" alt="">-->
                                   <img src="{{ asset('storage/' . $artikel->image) }}" height="100" alt="">
                                </td>
                                <td>
                                    <a href="../berita/editBerita/{{ $artikel->id }}" class="btn btn-success">Edit</a>
                                    <form action="../berita/deleteBerita/{{ $artikel->id }}" method="POST" class="d-inline">
                                        @csrf
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah anda yakin akan menghapus ?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


@endsection