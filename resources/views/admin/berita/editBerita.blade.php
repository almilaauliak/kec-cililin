@extends('layoutes.sidebarAdmin') 

@section('contentAdmin')

<div class="container col-xxl-8 py-5">
        <div class="card bg-white p-4 shadow rounded-4 border-0">

            <p class="mb-4">
                <a href="../data" class="text-decoration-none text-dark">Data</a> / Edit Artikel
            </p>

            {{-- Pesan Sukses di Simpan dan di Update --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Informasi</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            {{-- Pesan Sukses di Simpan dan di Update --}}

            <form action="../berita/updateBerita/{{ $artikel->id }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="">Masukan Judul</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                        value="{{ $artikel->judul }}">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="">Upload Image</label>
                    <div class="py-2">
                        <img src="{{ asset('storage/artikel/' . $artikel->image) }}" height="100" alt="">
                    </div>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="">Masukan Artikel</label>
                    <textarea name="desc" id="summernote" class="form-control  @error('desc') is-invalid @enderror">
                    {{ $artikel->desc }}
                    </textarea>
                    @error('desc')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            @section('scripts')
        <script type="text/javascript">
            function previewImage() {
                const image = document.querySelector('#image');
                const imgPreview = document.querySelector('.img-preview');

                imgPreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);

                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }
            }
        </script>
    @endsection 

        </div>
    </div>


@endsection
