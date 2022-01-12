@extends('layouts.master')
@section('content')
<a href="alumni/tambahdata">tambah data</a><br>

<hr>
    <table border="1">
        <thead>
            <tr>
                <td>NIS</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>Jurusan</td>
                <td>Keterangan</td>
                <td>Angkatan</td>
                <td>aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumni as $item)
            <tr>
                <td>{{$item->nis}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->jenis_kelamin}}</td>
                <td>{{$item->jurusan}}</td>
                <td>{{$item->keterangan}}</td>
                <td>{{$item->angkatan}}</td>
                <td><a href="alumni/edit/{{ $item->nis}}">Edit data</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
@endsection
