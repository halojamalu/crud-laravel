@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Profil Siswa</h3>
        </div>
        <div class="card-body">
            @can('isAdmin')
                <a href="{{ route('siswa.index') }}">Kembali</a>
            @endcan

            <table class="table table-striped table-dark ">
                <thead>
                    <div class="col ml-2">
                        <h4 class= "row"  > Nama : {{ $siswa->nama }} </h4>
                    </div>
                    <div class="col ml-2">
                        <h4 class= "row"  > NIS : {{ $siswa->nis }} </h4>
                    </div>
                    <div class="col ml-2">
                        <h4 class= "row"  > Tanggal Lahir : {{ $siswa->tgl_lahir }} </h4>
                    </div>
                </thead>


            </table>
        </div>
    </div>
</div>

@endsection