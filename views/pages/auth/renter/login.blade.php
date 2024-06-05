@extends('layouts.renter')

@section('section-auth')
<div class="login-card">
    <h1>Log-in</h1><br>
    <form action="/login" method="POST">
        @csrf
        <input class="text" type="email" name="email" id="email" placeholder="email@example.com" autofocus required>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="submit" value="Login" name="submit">
    </form>

    <div class="login-help">
        <p>Belum punya akun? <a href="{{ route('registration') }}">Daftar sekarang!</a></p>
    </div>
</div>
@endsection