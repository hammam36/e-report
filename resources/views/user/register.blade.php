@extends('layouts.user')
<!-- extends untuk mengambil dan memperluas suatu file, bahasa kerennya impor -->
@section ('css')
<link rel="stylesheet" href="{{asset('css/landing.css')}}">
<script src="jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    :root {
        --warna-utama: #CBD2A4;
        --warna-dominan: #AB886D;
        --warna-font: #ffffff;
    }

    body {
        background: var(--warna-utama);
    }

    .btn-purple {
        background-color: var(--warna-utama);
        width: 100%;
        color: var(--warna-font);
    }

    .btn-purple:hover {
        width: 100%;
        color: var(--warna-utama);
        font-weight: 600;
        background: var(--warna-dominan);
    }

    .back {
        background: var(--warna-utama);
        display: block;
        margin: 0 auto;
        width: 100px;
        text-decoration: none;
    }
    .password {
        display: inline-block;
        width: 100%;
        position: relative;
        border: 1px solid #000;
    }
    .pass-icon {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 24px;
        cursor: pointer;
    }
</style>
@endsection


@section('title', 'Register Page')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mb-0 mt-5">REHUB</h2>
            <p class="text-center text-white mb-5">E-Report Hub</p>
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-5">Create Account</h2>
                    <!-- INtinya di sini -->
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="number" name="nik" placeholder="NIK" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama" placeholder="Full Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" placeholder="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="password">
                                <input type="password" name="password" placeholder="Password" class="form-control" id="password">
                                <img src="{{ asset('image/view.png') }}" alt="eye-open" onclick="pass()" class="pass-icon" id="pass-icon">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="number" name="telp" placeholder="Phone Number" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-purple">Register</button>
                    </form>
                </div>
            </div>
            @if(Session::has('pesan'))
            <div class="alert alert-danger mt-2">
                {{ Session::get('pesan')}}
            </div>
            @endif
            <a href="{{ route('ereporthub.index') }}" class="btn btn-warning text-white mt-3" style="width: 100%;">Back To Home</a>
        </div>
    </div>
</div>
@endsection