@extends('layouts.authenticated_page')
@section('content')
    <div class="m-10">
        <div class="">
            <h1 class="text-2xl font-medium ">Todas as mensagens</h1>
        </div>
        <br>
        <div class="border border-blac p-3 flex flex-col gap-y-4 shadow-md bg-gray-50">
            <div class="self-end mt-2">
                <a href="{{ route("messages.create") }}" class="bg-gray-800 w-max self-end text-white mb-3 p-2 rounded-full">Nova Mensagem</a>
            </div>
            <hr>
            <div class="flex flex-wrap gap-y-4 gap-x-5">
                <div class="border border-gray-300 rounded w-[100%]">
                    <table class="w-full">
                        <thead class="border-b border-gray-300 bg-gray-100">
                            <tr>
                                <th class="px-3 text-start">Nome</th>
                                <th class="px-3 text-start">Botão</th>
                                <th class="px-3 text-start">Opções</th>
                                <th class="px-3 text-start">Criada Em</th>
                                <th class="px-3 text-start">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $index => $message)
                                <tr @if ($index % 2 == 1) class="bg-gray-100" @endif>
                                    <td class="px-3 text-start font-semibold">{{ $message->name }}</td>
                                    <td class="px-3 text-start">{{ $message->button }}</td>
                                    <td class="px-3 text-start">{{ $message->secondaryMessages()->count() }}</td>
                                    <td class="px-3 text-start">{{ $message->formatted_created_at }}</td>
                                    <td class="px-3 text-start flex gap-x-2">
                                        <a href="{{ route("messages.show", $message->id) }}">
                                            <button><i class="bi bi-eye"></i></button>
                                        </a>
                                        <a href="{{ route("messages.edit", $message->id) }}">
                                            <button><i class="bi bi-pencil-square"></i></button>
                                        </a>
                                        <form method="POST" action="{{ route("messages.destroy", $message->id) }}">
                                            @csrf
                                            @method("DELETE")
                                            <button><i class="bi bi-trash3-fill"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
