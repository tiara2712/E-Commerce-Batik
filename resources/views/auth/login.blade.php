@extends('app')
@section('content')
<div class="row">
    <div class="login">
        @if (session('success'))
            <p class="alert alert success">{{ session('success') }}</p>
        @endif
        @if ($errors->any)
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
        <form method="POST" action="{{ route('login.action') }}">
            @csrf
            <h1>Login</h1>
            <hr>
            <p>E-Commerce Batik Bali</p>
            <label for="">Email</label>
            <input class="form-control" type="text" name="username" placeholder="example@gmail.com" value="{{ old('username') }}" />
            <label for="">Password</label>
            <input class="form-control" type="password" name="password" placeholder="password" />
                <button>LOGIN<a href="home"></button>
                <p>
                    <a href="#">Forgot Password?</a>
                    <a href="register">Sign Up</a>
        </form>
    </div>
@endsection