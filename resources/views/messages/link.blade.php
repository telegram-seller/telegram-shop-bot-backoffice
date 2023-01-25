@extends('layouts.authenticated_page')
@section('content')
    <div class="m-10">
        <div class="">
            <h1 class="text-2xl font-medium ">Vincular mensagens à {{ $message->name }}</h1>
        </div>
        <br>
        <div class="border border-blac p-3 flex flex-col gap-y-4 shadow-md bg-gray-50">
            <form action="{{ route("messages.updateSecondaryMessages", $message->id) }}" method="post">
                @csrf
                @method("PUT")
                <div class="flex flex-wrap gap-y-4 gap-x-5">
                    <div class="border border-gray-300 rounded w-[100%]">
                        <table class="w-full">
                            <thead class="border-b border-gray-300 bg-gray-100">
                                <tr>
                                    <th class="px-3 text-start">Nome</th>
                                    <th class="px-3 text-start">Botão</th>
                                    <th class="px-3 text-start">Criada Em</th>
                                    <th class="px-3 text-start">Vincular</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($secondaryMessages as $index => $secondaryMessage)
                                    <tr @if ($index % 2 == 1) class="bg-gray-100" @endif>
                                        <td class="px-3 text-start font-semibold">{{ $secondaryMessage->name }}</td>
                                        <td class="px-3 text-start">{{ $secondaryMessage->button }}</td>
                                        <td class="px-3 text-start">{{ $secondaryMessage->formatted_created_at }}</td>
                                        <td class="px-3 text-start">
                                            <input type="checkbox" name="messages[{{ $secondaryMessage->id }}]" class="cursor-pointer">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
