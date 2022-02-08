<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index(){
        $data = DB::table('member')->groupBy('nis')->paginate(1);

        return view('alumni', ['alumni' => $data]);
        // return view('alumni');
    }
    public function tambah(){
        return view('tambahalumni');
    }
    public function store(Request $request){
        //dd($request->all());
        // DB::insert('insert into member (nis, nama, jenis_kelamin, jurusan, keterangan, date_create, date_update, angkatan, role) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [$request->nis, $request->nama, $request->jk, $request->jurusan, $request->keterangan, date('Y-m-d'), date('Y-m-d'), $request->angkatan, 2]);
        DB::table('member')->insert([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jk,
            'jurusan' => $request->jurusan,
            'keterangan' => $request->keterangan,
            'date_create' => date('Y-m-d'),
            'date_update' => date('Y-m-d'),
            'angkatan' => $request->angkatan,
            'role' => '2'
        ]);

        return redirect()->route('alumni.index');
    }
    public function edit($id){
       $alumni = DB::table('member')->where('nis', $id)->get();
    //    dd($alumni);

       return view('editalumni', ['alumni' => $alumni]);
    }
    public function update(Request $request){
        DB::table('member')->where('nis', $request->nis)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jk,
            'jurusan' => $request->jurusan,
            'keterangan' => $request->keterangan,
            'date_update' => date('Y-m-d'),
            'angkatan' => $request->angkatan
        ]);
        return redirect()->route('alumni.index');
    }
    public function delete($id){
        // dd($id);
        DB::table('member')->where('nis', $id)->delete();

        return redirect()->back();
    }
}
