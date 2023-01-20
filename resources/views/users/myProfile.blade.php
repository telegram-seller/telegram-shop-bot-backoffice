@extends('layouts.authenticated_page')
@section('content')
    <div class="m-10">
        <div class="">
            <h1 class="text-2xl font-medium ">Meus Dados</h1>
        </div>
        <br>
        <form action="{{ route("updateUser") }}" method="post">
            @csrf
            @method("PUT")
            <div class="border border-blac p-3 shadow-md bg-gray-50">
                <div class="flex flex-wrap  gap-y-4 gap-x-5">
                    <div class="flex flex-col w-[30%]">
                        <label for="name">Nome *</label>
                        <input name="name" type="text" placeholder="Nome Completo" value="{{ $user->name }}"
                        class="border rounded-lg border-black mt-2 px-2 py-1 duration-150 hover:drop-shadow-md focus:drop-shadow-md">
                    </div>
        
                    <div class="flex flex-col w-[30%]">
                        <label for="name">Email *</label>
                        <input name="name" type="text" placeholder="Email para contato" value="{{ $user->email }}"
                        class="border rounded-lg border-black mt-2 px-2 py-1 duration-150 hover:drop-shadow-md focus:drop-shadow-md">
                    </div>

                    <div class="flex flex-col w-[30%]">
                        <label for="name">Senha *</label>
                        <input name="name" type="password" placeholder="Nome da mensagem"
                        class="border rounded-lg border-black mt-2 px-2 py-1 duration-150 hover:drop-shadow-md focus:drop-shadow-md">
                    </div>

                    <div class="flex flex-col w-[30%]">
                        <label for="name">Telefone *</label>
                        <input name="name" type="text" placeholder="Nome da mensagem" value="{{ $user->cellphone }}"
                        class="border rounded-lg border-black mt-2 px-2 py-1 duration-150 hover:drop-shadow-md focus:drop-shadow-md">
                    </div>

                    <div class="flex flex-col w-[30%]">
                        <label for="name">Cartão de crédito *</label>
                        <input name="name" type="text" value="{{ $user->credicard }}"
                        class="border rounded-lg border-black mt-2 px-2 py-1 duration-150 hover:drop-shadow-md focus:drop-shadow-md">
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit" class="rounded-full cursor-pointer bg-gray-800 p-2 text-white"><span>Atualizar</span></button>
                </div>
            </div>
        </form>
    </div>
@endsection
