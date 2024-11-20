@extends('layoutes.sidebarAdmin') 

@section('contentAdmin')

<div class="container col-xxl-8 py-5">
    <div class="card bg-white p-4 shadow rounded-4 border-0">

        <p class="mb-4">
            <a href="{{ route('homepage.dataHomepage') }}" class="text-decoration-none text-dark">Data</a> / Edit Homepage
        </p>

        {{-- Pesan Sukses di Simpan dan di Update --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Informasi</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('homepage.updateHomepage', $homepage->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="">Content/Category</label>
                <input type="text" class="form-control @error('content') is-invalid @enderror" name="content"
                    value="{{ old('content', $homepage->content) }}" readonly>
                @error('content')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="">Masukan Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                    value="{{ old('judul', $homepage->judul) }}">
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="">Masukan Deskripsi</label>
                <textarea name="desc" id="summernote" class="form-control @error('desc') is-invalid @enderror">
                    {{ old('desc', $homepage->desc) }}
                </textarea>
                @error('desc')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="">Upload Image</label>
                <div class="py-2">
                    @if ($homepage->image)
                        <img src="{{ asset('storage/' . $homepage->image) }}" height="100" alt="Image Preview">
                    @else
                        <p>Tidak ada gambar yang diunggah.</p>
                    @endif
                </div>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" 
                    @if (!$homepage->image) disabled @endif>
                @error('image')
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