@extends('layouts.master')
@section('judul')
@section('content')
<div class="section-header">
    <h1>Alumni</h1>
</div>
<a href="{{route('alumni.tambah')}}">tambah data</a><br>

<hr>
    <table class="table table-striped table-bordered table-sm">
        <thead>
            <tr>
                <td>No</td>
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
            @forelse ( $alumni as $no => $item )
            <tr>
                <td>{{ $alumni->firstitem()+$no }}</td>
                <td>{{$item->nis}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->jenis_kelamin}}</td>
                <td>{{$item->jurusan}}</td>
                <td>{{$item->keterangan}}</td>
                <td>{{$item->angkatan}}</td>
                <td><a href="alumni/edit/{{ $item->nis}}">Edit data |</a>
                <form action="{{route('alumni.delete', $item->nis)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">| Hapus data</button>
                </form>

                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="8" style="text-align: center">Data Masih Kosong</td>
                </tr>
            @endforelse


        </tbody>
    </table>
    {{$alumni->links()}}
@endsection
