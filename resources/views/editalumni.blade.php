@extends('layouts.master')
@section('content')
@foreach ( $alumni as $a)
    <form action="update" method="POST">
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
            <option value="teavi">Teknik Audio Video</option>
            <option value="toi">Teknik Otomasi Industri</option>
            <option value="titl">Teknik Intsalasi Tenaga Listrik</option>
            <option value="tkj">Teknik Komputer dan Jaringan</option>
            <option value="rpl">Rekayasa Perangkat Lunak</option>
            <option value="mm">Multimedia</option>
        </select><br>
        {{-- <input type="select" id="jurusan" name="jurusan"><br> --}}

        <label for="keterangan">Keterangan</label><br>
        <input type="radio" id="sudah" name="keterangan" value="S">
        <label for="sudah">Sudah Berkerja</label><br>
        <input type="radio" id="belum" name="keterangan" value="B">
        <label for="belum">Belum Berkerja</label><br>
        <input type="radio" id="wirausaha" name="keterangan" value="W">
        <label for="wirausaha">Wirausaha</label><br>

        <label for="angkatan">Angkatan : </label>
        <input type="text" id="angkatan" name="angkatan">
        <button type="submit">submit</button>
    </form>
    @endforeach
@endsection
