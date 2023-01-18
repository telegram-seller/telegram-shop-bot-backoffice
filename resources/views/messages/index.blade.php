@extends('layouts.authenticated_page')
@section('content')
    <h1 class="text-xl">Todas as mensagens</h1>

    <div class="flex flex-col w-3/4">
        <a href="{{ route("messages.create") }}" class="bg-gray-800 w-max self-end text-white mb-3 p-2 rounded-full">Nova Mensagem</a>
        <div class="border border-gray-300 rounded">
            <table class="w-full">
                <thead class="border-b border-gray-300 bg-gray-100">
                    <tr>
                        <th class="px-3 text-start">Nome</th>
                        <th class="px-3 text-start">Botão</th>
                        <th class="px-3 text-start">Criada Em</th>
                        <th class="px-3 text-start">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $index => $message)
                        <tr @if ($index % 2 == 1) class="bg-gray-100" @endif>
                            <td class="px-3 text-start font-semibold">{{ $message->name }}</td>
                            <td class="px-3 text-start">{{ $message->button }}</td>
                            <td class="px-3 text-start">{{ $message->formatted_created_at }}</td>
                            <td class="px-3 text-start">
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
@endsection
