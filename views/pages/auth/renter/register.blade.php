@extends('layouts.renter')

@section('section-auth')

<div class="login-card">
    <h1>Selamat Datang!</h1><br>
    <form action="{{ route('registration.store') }}" method="POST">
        @csrf
        <input class="text" type="text" name="nama" id="nama" placeholder="Nama Lengkap" required autofocus>
        @error('nama')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <select name="role" class="text email">
            <option value="renter">Pelanggan</option>
            <option value="owner">Pemilik</option>
        </select>		
        @error('role')
            <p class="text-danger">{{ $message }}</p>
        @enderror		
        <input class="text" type="email" name="email" id="email" placeholder="email@example.com" required>
        @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <input class="text w3lpass" type="password" name="password" id="password" placeholder="Password" required>
        @error('password')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <input type="submit" value="Daftar" name="submit">
    </form>

    <div class="login-help">
        <p>Sudah punya akun? <a href="{{ route('login.renter') }}"> Masuk sekarang!</a></p>
    </div>
</div>

@endsection