{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Beranda</title>
</head>
<body>
    <nav class="navbar navbar-expand bg-dark">
        <ul class="nav text-light ml-auto">
        <li>
            <a href="{{ url('/beranda') }}" class="nav-link text-light" >Beranda</a>
           </li>
           <li>

               <a href="{{ url('/informasi') }}" class="nav-link text-light" >Informasi</a>
           </li>
           <li>

               <a href="{{ url('/data-siswa') }}" class="nav-link text-light" >Data Siswa</a>
           </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 ml-4">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
    </nav> --}}
    @extends('layouts.app')
    @section('content')
    <div class="jumbotron text-center">
        <h1>Portal Informasi Siswa</h1>
        <p>Selamat datang di Portal Informasi Siswa Bimtek: </p>
        <a href="#" class="btn btn-dark">Info Kegiatan</a>
        <a href="#" class="btn btn-primary">Data Siswa</a>
    </div>
    @endsection


    {{-- js bootstrap --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html> --}}