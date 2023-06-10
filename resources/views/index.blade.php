@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('siswa.create') }}">Tambah Data Siswa</a>

            <table class="table table-bordered table-striped ">
                <tr>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>

                @foreach ($datasiswa as $siswa )
                <tr>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->tgl_lahir }}</td>

                    <td>
                        <ul class="nav">
                            <a href="{{ route('siswa.show', $siswa->id) }}" class="btn btn-success mr-2 ">Show</a>
                            <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-secondary mr-2 ">Edit</a>

                            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                            
                            </form>
                        </ul>
                    </td>

                </tr>                 
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection