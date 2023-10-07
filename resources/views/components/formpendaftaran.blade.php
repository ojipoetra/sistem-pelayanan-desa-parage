@extends('menu.navbar')

@section('components')
    <div class="container d-flex justify-content-center align-items-center pendaftaran">
        <form action="/register" method="post" class="row form-daftar mt-5">
            @csrf
            <h3 class="text-center rounded bg-info p-2 text-light ">Form Pendaftaran</h3>
            <div class="col-md-6 pt-2">
                <label for="nama" class="form-label"><i class="bi bi-person"></i> Nama</label>
                <input type="text" name="nama" class="form-control text-capitalize @error('nama')is-invalid @enderror"
                    id="nama" placeholder="masukan nama sesuai ktp" value="{{ old('nama') }}">
                @error('nama')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-6  pt-2">
                <label for="nik_ktp" class="form-label"><i class="bi bi-credit-card"></i> NIK KTP</label>
                <input type="number" name="ktp" class="form-control @error('ktp')is-invalid @enderror" id="nik_ktp"
                    placeholder="36021xxxx xxx xxx" value="{{ old('ktp') }}">
                @error('ktp')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-4 pt-2">
                <label for="email" class="form-label"><i class="bi bi-envelope"></i> E-mail</label>
                <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email"
                    placeholder="example@gmail.com">
                @error('email')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-6 pt-2 password">
                <label for="password" class="form-label"><i class="bi bi-key"></i> Password</label>
                <input type="password" name="password" class="inp form-control @error('password')is-invalid @enderror"
                    id="password" placeholder="A17member">
                <i onclick="unlock()" class="btn bi-lock-fill fs-4 lock"></i>
                @error('password')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
            {{-- <div class="col-md-6 pt-2 password">
            <label for="konformpassword" class="form-label"><i class="bi bi-key"></i> Konfirmasi Password</label>
            <input type="password" class="inp form-control @error('password')is-invalid @enderror" id="konformpassword" placeholder="A17member"
                name="konformpassword">
            <i class="btn lock"></i>
            @error('konformpassword')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div> --}}
            <div class="mt-2">
                <form action="" method="">
                    @csrf
                    <button type="submit" class="btn btn-primary" name="daftar">Daftar dan Selesai</button>
                </form>
            </div>
        </form>
    </div>
@endsection
