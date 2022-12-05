@extends('app')
@section('content')
<div class="row">
    <div class="login">
        @if ($errors->any)
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
        <form method="POST" action="{{ route('register.action') }}">
            @csrf
            <h1>Sign Up</h1>
            <hr>
            <p>E-Commerce Batik Bali</p>
            <label for="">Username</label>
            <input class="form-control" type="text" name="name" placeholder="name" value="{{ old('name') }}" />
            <label for="">Email</label>
            <input class="form-control" type="text" name="username" placeholder="example@gmail.com" value="{{ old('username') }}" />
            <label for="">Password</label>
            <input class="form-control" type="password" name="password" placeholder="password" />
            <label for="">Re-Password</label>
            <input class="form-control" type="password" name="password_confirmation" placeholder="re-password"/>
            <button>SIGN UP<a href="{{ route('login') }}"></button>
        </form>
    </div>
@endsection