@extends('layouts.authenticated_page')
@section('content')
    <div class="m-10">
        <div class="">
            <h1 class="text-2xl font-medium ">Editar mensagem</h1>
        </div>
        <br>
        <div class="border border-blac p-3 shadow-md bg-gray-50">
            <form action="{{ route("messages.update", $message->id) }}" method="post">
                @csrf
                @method("PUT")
                <div class="flex flex-wrap  gap-y-4 gap-x-5">
                    <div class="flex flex-col w-[436px]">
                        <label for="name">Nome *</label>
                        <input name="name" type="text" placeholder="Nome da mensagem" value="{{ $message->name }}"
                        class="border rounded-lg border-black mt-2 px-2 py-1 duration-150 hover:drop-shadow-md focus:drop-shadow-md">
                    </div>
        
                    <div class="flex flex-col w-[436px]">
                        <label for="button">Botão *</label>
                        <input name="button" type="text" placeholder="Texto do botão" value="{{ $message->button }}"
                        class="border rounded-lg border-black mt-2 px-2 py-1 duration-150 hover:drop-shadow-md focus:drop-shadow-md">
                    </div>
        
                    <div class="flex flex-col w-full">
                        <label for="content">Conteúdo *</label>
                        <textarea placeholder="Conteúdo da mensagem" name="content" id="content" cols="30" rows="10" class="border rounded-lg border-black mt-2 px-2 py-1 duration-150 hover:drop-shadow-md focus:drop-shadow-lg">{{ $message->content }}</textarea>
                    </div>
        
                    <div>
                        <button type="submit" class="rounded-full cursor-pointer bg-gray-800 p-2 text-white"><span>Atualizar</span></button>
                        <a href="{{ route("messages.index") }}">
                            <button type="button" class="rounded-full cursor-pointer bg-gray-800 p-2 text-white">Voltar para a listagem</button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
