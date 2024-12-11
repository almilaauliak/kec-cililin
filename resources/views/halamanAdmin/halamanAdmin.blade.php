@extends('layoutes.sidebarAdmin')

@section('contentAdmin')
<div class="container col-xxl-8 py-5">
    <div class="card bg-white p-4 shadow rounded-4 border-0">

        <div class="d-flex justify-content-between mb-4">
            <div>
                <h4>Data Halaman: {{ $page }}</h4>
            </div>
            <!-- <div>
                <a href="{{ route('halamanAdmin.createHalamanAdmin', ['page' => $page]) }}" class="btn btn-primary">Create Halaman</a>
            </div> -->
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Informasi</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table id="myTable" class="table table-bordered">
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
                    <!-- Data akan diisi oleh DataTables -->
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("halamanAdmin.dataHalamanAdmin", ["page" => $page]) }}',
                type: 'GET',
                dataType: 'json', // Tambahkan ini
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                },
                error: function (xhr, error, thrown) {
                    console.log('Ajax error:', error);
                    console.log('Response Text:', xhr.responseText);
                },
                headers: {
                    'X-Requested-With': 'XMLHttpRequest' // Pastikan header ini ada
                }
            },
            columns: [
                {
                    data: null,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1; // Menampilkan nomor urut
                    }
                },
                { data: 'page', name: 'page' },
                { data: 'kategori', name: 'kategori' },
                { data: 'judul', name: 'judul' },
                {
                    data: 'id',
                    render: function (data, type, row) {
                        return `
                            <a href="/halamanAdmin/editHalamanAdmin/${data}" class="btn btn-success">Edit</a>
                            <form action="/halamanAdmin/deleteHalamanAdmin/${data}" method="POST" style="display:inline;">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                            </form>
                        `;
                    }
                }
            ]
        });
    });
</script>
@endsection

@endsection