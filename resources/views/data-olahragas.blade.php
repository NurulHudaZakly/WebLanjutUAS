@extends('layout.template')

@section('title', 'Data Olahraga')

@section('content')

    <h1>Data Olahraga</h1>
    <a href="/olahragas/create" class="btn btn-success">Input Olahraga</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tahun</th>
                <th scope="col">Penemu</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($olahragas as $olahraga)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $olahraga->nama }}</td>
                    <td>{{ $olahraga->category->nama_kategori }}</td>
                    <td>{{ $olahraga->tahun }}</td>
                    <td>{{ $olahraga->penemu }}</td>
                    <td class="text-nowrap">
                        <a href="/olahraga/{{ $olahraga['id'] }}/edit" class="btn btn-success">Edit</a>
                        <a href="/olahraga/delete/{{ $olahraga->id }}" class="btn btn-danger"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $olahragas->links() }}
    </div>
@endsection
