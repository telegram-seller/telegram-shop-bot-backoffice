@extends('layouts.authenticated_page')
@section('content')

    <div class="m-10">
        <div class="">
            <h1 class="text-2xl font-medium ">Ver detalhes da mensagem</h1>
        </div>
        <br>
        <div class="border border-blac p-3 shadow-md bg-gray-50">
            <div class="flex flex-wrap  gap-y-4 gap-x-5">
                <div class="flex flex-col w-[436px]">
                    <label>Nome</label>
                    <p class="border rounded-lg border-black mt-2 px-2 py-1">{{ $message->name }}</p>
                </div>
    
                <div class="flex flex-col w-[436px]">
                    <label>Botao</label>
                    <p class="border rounded-lg border-black mt-2 px-2 py-1">{{ $message->button }}</p>
                </div>
    
                <div class="flex flex-col w-full">
                    <label for="content">Conteúdo</label>
                    <p class="border rounded-lg border-black mt-2 px-2 py-1">{{ $message->content }}</p>
                </div>
    
                <div>
                    <a href="{{ route("messages.index") }}">
                        <button type="button" class="rounded-full cursor-pointer bg-gray-800 p-2 text-white">Voltar para a listagem</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
