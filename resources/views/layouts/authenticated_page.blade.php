@extends('layouts.main')
@section('page')
    @include('layouts.components.sidebar')
    @include('layouts.components.header')
    @yield('content')
    @include('layouts.components.footer')
@endsection