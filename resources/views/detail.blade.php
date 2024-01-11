@extends('layout.template')

@section('title', $olahraga ? $olahraga->nama : 'Detail Olahraga')

@section('content')
    @if ($olahraga)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-9">
                    <div class="card-body">
                        <h2 class="card-title">{{ $olahraga->nama }}</h2>
                        <p class="card-text">{{ $olahraga->sinopsis }}</p>
                        <p class="card-text">Kategori :
                            {{ $olahraga->category ? $olahraga->category->nama_kategori : 'Tidak ada kategori' }}</p>
                        <p class="card-text">Tahun : {{ $olahraga->tahun }}</p>
                        <p class="card-text">Penemu : {{ $olahraga->penemu }}</p>
                        <a href="/" class="btn btn-success">Kembali</a>

                    </div>
                </div>
                <div class="col-md-3">
                    <img src="/images/{{ $olahraga->foto_sampul }}" class="img-fluid rounded-end" alt="...">
                </div>
            </div>
        </div>
    @else
        <p>Data olahraga tidak ditemukan.</p>
    @endif
@endsection
