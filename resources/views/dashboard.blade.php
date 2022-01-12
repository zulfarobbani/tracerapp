@extends('layouts.master')
@section('content')
<center>
    <div class="flex" style="padding: 15px;">
        <div class="fg">
            <b><a href="index.html" style="color: lightseagreen;">Dashboard</a></b>
        </div>
        <div class="fg">
            <b><a href="login.html">Login/Register</a></b>
        </div>
        <div class="fg">
            <b><a href="profile.html">Profile</a></b>
        </div>
        <div class="fg">
            <b><a href="alumni">Data Alumni</a></b>
        </div>
        <div class="fg">
            <b><a href="post.html">Postingan</a></b>
        </div>
    </div>
</center>
<hr>
<br>

<article class="card">
    <center>
    <h3>Selamat Datang di Web Tracer Alumni</h3>
    </center>
</article>

<article>
    <p style="display: flex;">
        <span style="flex-grow: 1;" class="card">
            Alumni Tahun 2017 : <b>215 Orang</b>
        </span>
        <span style="flex-grow: 1;" class="card">
            Alumni Tahun 2018 : <b>329 Orang</b>
        </span>
        <span style="flex-grow: 1;" class="card">
            Alumni Tahun 2019 : <b>441 Orang</b>
        </span>
    </p>
</article>
</main>

<footer>
<p style="color: #434343;">
    <a>About</a> &nbsp; <a>Contact Us</a> &nbsp;<a>Help</a> &nbsp; <a>Privacy</a> &nbsp; <a>Terms</a> &nbsp;
</p>
<p>copyright 2022 | <span style="color: lightseagreen;">SMK NEGERI 4 BANDUNG</span></p>
</footer>
@endsection
