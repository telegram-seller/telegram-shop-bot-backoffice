@extends('layouts.main')
@section('page')
    <form action="{{ route("login") }}" method="POST" class="w-[100vw] h-[100vh] flex justify-center items-center bg-blue-200">
        @csrf
        <div class="border rounded border-black w-[30%] h-[50%] bg-white shadow-inner flex flex-col">
            <div class="flex flex-col justify-start items-center w-[100%] h-[100%] pt-10 gap-6">
                <div class="flex flex-col w-[70%]">
                    <h2 class="text-xl font-semibold">Login</h2>
                </div>
                <div class="flex flex-col w-[70%]">
                    <label for="email">Email</label>
                    <input name="email" type="text"
                    class="border rounded-lg border-black mt-2 px-2 py-1 duration-150 hover:drop-shadow-md focus:drop-shadow-md">
                    @error('email')
                        <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-[70%]">
                    <label for="password">Senha</label>
                    <input name="password" type="password" id="password"
                    class="border rounded-lg border-black mt-2 px-2 py-1 duration-150 hover:drop-shadow-md focus:drop-shadow-md">
                </div>
                {{-- <br> --}}
                <div class="w-[70%]">
                    <button type="submit" class="rounded-full w-[100%] cursor-pointer bg-gray-800 p-2 text-white"><span>Conectar</span></button>
                </div>
            </div>
        </div>
    </form>
@endsection