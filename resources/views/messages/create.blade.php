@extends('layouts.authenticated_page')
@section('content')
    <h1 class="text-xl">Criar nova mensagem</h1>

    <form action="{{ route("messages.store") }}" method="post">
        @csrf
        <div class="flex flex-wrap mx-5 gap-y-4 gap-x-5">
            <div class="flex flex-col w-[436px]">
                <label for="name">Nome *</label>
                <input name="name" type="text" placeholder="Nome da mensagem"
                class="border rounded-lg border-black px-2 py-1 duration-150 hover:drop-shadow-md focus:drop-shadow-md">
            </div>

            <div class="flex flex-col w-[436px]">
                <label for="button">Botão *</label>
                <input name="button" type="text" placeholder="Texto do botão"
                class="border rounded-lg border-black px-2 py-1 duration-150 hover:drop-shadow-md focus:drop-shadow-md">
            </div>

            <div class="flex flex-col w-full">
                <label for="content">Conteúdo *</label>
                <textarea placeholder="Conteúdo da mensagem" name="content" id="content" cols="30" rows="10" class="border rounded-lg border-black px-2 py-1 duration-150 hover:drop-shadow-md focus:drop-shadow-lg"></textarea>
            </div>

            <div>
                <button type="submit" class="rounded-full cursor-pointer bg-gray-800 p-2 text-white"><span>Cadastrar</span></button>
                <a href="{{ route("messages.index") }}">
                    <button type="button" class="rounded-full cursor-pointer bg-gray-800 p-2 text-white">Voltar para a listagem</button>
                </a>
            </div>
        </div>
    </form>
@endsection
