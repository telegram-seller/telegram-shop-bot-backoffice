@extends('layouts.authenticated_page')
@section('content')
    <h1 class="text-xl">Ver detalhes da mensagem</h1>

    <div class="flex flex-wrap mx-5 gap-y-4 gap-x-5">
        <div class="flex flex-col w-[436px]">
            <label>Nome</label>
            <p class="border rounded-lg border-black px-2 py-1 hover:drop-shadow-md focus:drop-shadow-md">{{ $message->name }}</p>
        </div>

        <div class="flex flex-col w-[436px]">
            <label>Botão</label>
            <p class="border rounded-lg border-black px-2 py-1 hover:drop-shadow-md focus:drop-shadow-md">{{ $message->button }}</p>
        </div>

        <div class="flex flex-col w-full">
            <label>Conteúdo</label>
            <p class="border rounded-lg border-black px-2 py-1 hover:drop-shadow-md focus:drop-shadow-md">{{ $message->content }}</p>
        </div>

        <div>
            <a href="{{ route("messages.index") }}">
                <button type="button" class="rounded-full cursor-pointer bg-gray-800 p-2 text-white">Voltar para a listagem</button>
            </a>
        </div>
    </div>
@endsection
