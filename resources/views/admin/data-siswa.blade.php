@extends('admin.layouts.templates')

@section('content')
    <div class="shadow p-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="bg-dark text-center text-light">No</th>
                    <th class="bg-dark text-center text-light">NIS</th>
                    <th class="bg-dark text-center text-light">Nama Siswa</th>
                    <th class="bg-dark text-center text-light">Email</th>
                    <th class="bg-dark text-center text-light">Kelas</th>
                    <th class="bg-dark text-center text-light">Jurusan</th>
                    <th class="bg-dark text-center text-light">Aksi</th>
                </tr>
            </thead>
            @foreach ($siswa as $index => $sis)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $sis->nis }}</td>
                    <td>{{ $sis->user->nama }}</td>
                    <td>{{ $sis->user->email }}</td>
                    <td>{{ $sis->kelas }}</td>
                    <td>{{ $sis->jurusan }}</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-info me-2">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="#" class="btn btn-sm btn-danger"
                           onclick="return confirm('Yakin data siswa ini akan dihapus?')">
                            <i class="fas fa-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection