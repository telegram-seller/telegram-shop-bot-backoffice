@extends('layouts.main')
@section('page')
<div class="w-screen h-screen flex text-whit">
    <div class="w-[350px]">
        @include('layouts.components.sidebar')
    </div>
    <div class="w-full">
        @include('layouts.components.header')
        @yield('content')
        @include('layouts.components.footer')
    </div>
</div>
@endsection