@extends('menu.navbar')

{{-- login --}}
@section('components')
<div class="container-fluid row box-size login">
    <div class="col-md-6 hidden">
        <header class="">
            <h2 class="text-center text-light pt-5 px-2">Selamat Datang Di Sistem Pelayanan Administrasi Kantor Desa Parage</h2>
            {{-- <img src="Asetpictures/background.png" alt=""> --}}
            <img src="{{ asset('Asetpictures/background.png') }}" alt="">
        </header>
    </div>
           
    <div class="col-md-6 d-flex justify-content-center align-items-center flex-column">
        <div class="row">
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif  
        </div>
        <div class="box-login">
            <p>{{ session('success') }}</p>
            <h2 class="text-light">Login</h2>
            <form action="/login" method="post" class="">
                @csrf
                <div class="field-box">
                    <input type="text" name="email" class="form-input @error('email') is-invalid @enderror" autocomplete="off" autofocus required>
                    <label for="" class="form-label">Email</label>
                    @error('email')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field-box">
                    <input type="password" name="password" class="form-input inp" autocomplete="off" required>
                    <label for="" class="form-label">Password</label>
                    <i onclick="unlock()" class="btn lock bi-lock-fill fs-4"></i>
                </div>
                <div class="d-flex justify-content-between mb-3 forgot">
                    <a href="" class="badge text-bg-light text-decoration-none">Lupa Password</a>
                    <a href="/register" class="badge text-bg-light text-decoration-none">Belom Punya Akun ?
                        Daftar</a>
                </div>
                <div class="d-flex justify-content-between option">
                    <form action="" method="post">
                        @csrf
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </form>
                    <a href="" class="btn btn-success">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>



<script src="js/login.js"></script>
  
{{-- akhir login --}}
@endsection