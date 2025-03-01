@extends('layouts.header')

@section('title', 'Login')

@section('body')
    <div class="d-flex align-items-center justify-content-center">
        <form action="{{ route('auth.authenticate') }}" class="auth" method="POST">
            @csrf
    
            <div class="input-group mb-3">
                <span class="input-group-text">@</span>
                <input 
                    type="email" 
                    name="email"
                    id="login-email"
                    required 
                    maxlength="255"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"
                    placeholder="E-mail"
                >
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                <input 
                    type="password" 
                    name="password"
                    id="login-password"
                    required 
                    maxlength="60"
                    class="form-control @error('password') is-invalid @enderror"
                    value="{{ old('password') }}"
                    placeholder="Password"
                >
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
    
    
            <div class="col">
                <input type="submit" value="Login" class="btn btn-primary w-100">
            </div>
        </form>
    </div>
@endsection