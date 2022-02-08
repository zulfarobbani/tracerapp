@extends('layouts.master')
@section('judul')

@section('content')
<div class="section-header">
    <h1>Edit data</h1>
</div>
@foreach ( $alumni as $a)
    <form action="/alumni/update" method="POST">
         @csrf


        {{-- <label for="nis">Nis : </label> --}}
        <input type="hidden" id="nis" name="nis" value="{{ $a->nis }}"><br>

        <label for="nama">Nama : </label>
        <input type="text" id="nama" name="nama" value="{{ $a->nama }}"><br>

        <label for="jk">jenis Kelamin</label><br>
        <input type="radio" id="lk" name="jk" value="L" {{$a->jenis_kelamin == 'L'? 'checked' : ''}}>
        <label for="laki">laki - laki</label><br>
        <input type="radio" id="pr" name="jk" value="P" {{$a->jenis_kelamin == 'P'? 'checked' : ''}}>
        <label for="perempuan">perempuan</label><br>

        <label for="jurusan">Jurusan</label>
        <select name="jurusan" id="jurusan">
            <option value=""></option>
            <option value="Teknik Audio Video" {{$a->jurusan == 'Teknik Audio Video'? 'selected' : ''}}>Teknik Audio Video</option>
            <option value="Teknik Otomasi Industri" {{$a->jurusan == 'Teknik Otomasi Industri'? 'selected' : ''}}>Teknik Otomasi Industri</option>
            <option value="Teknik Intsalasi Tenaga Listrik" {{$a->jurusan == 'Teknik Intsalasi Tenaga Listrik'? 'selected' : ''}}>Teknik Intsalasi Tenaga Listrik</option>
            <option value="Teknik Komputer dan Jaringan" {{$a->jurusan == 'Sudah'? 'selected' : ''}}>Teknik Komputer dan Jaringan</option>
            <option value="Rekayasa Perangkat Lunak" {{$a->jurusan == 'Rekayasa Perangkat Lunak'? 'selected' : ''}}>Rekayasa Perangkat Lunak</option>
            <option value="Multimedia" {{$a->jurusan == 'Multimedia'? 'selected' : ''}}>Multimedia</option>
        </select><br>
        {{-- <input type="select" id="jurusan" name="jurusan"><br> --}}

        <label for="keterangan">Keterangan</label><br>
        <input type="radio" id="sudah" name="keterangan" value="Sudah" {{$a->keterangan == 'Sudah'? 'checked' : ''}}>
        <label for="sudah">Sudah Berkerja</label><br>
        <input type="radio" id="belum" name="keterangan" value="Belum" {{$a->keterangan == 'Belum'? 'checked' : ''}}>
        <label for="belum">Belum Berkerja</label><br>
        <input type="radio" id="wirausaha" name="keterangan" value="Wirausaha" {{$a->keterangan == 'Wirausaha'? 'checked' : ''}}>
        <label for="wirausaha">Wirausaha</label><br>

        <label for="angkatan">Angkatan : </label>
        <input type="text" id="angkatan" name="angkatan" value="{{$a->angkatan}}">
        <button type="submit">submit</button>
    </form>
    @endforeach
    <a href="{{route('alumni.index')}}">kembali</a>
@endsection
