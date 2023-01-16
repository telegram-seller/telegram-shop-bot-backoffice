@extends('layouts.main')
@section('page')
    <form action="{{ route("login") }}" method="POST">
        @csrf
        <div>
            <label for="email">email</label>
            <input type="text" id="email" name="email" placeholder="email@test.com">
            @error('email')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" id="password" name="password" placeholder="********">
        </div>
        <input type="submit" value="Conectar">
    </form>
@endsection