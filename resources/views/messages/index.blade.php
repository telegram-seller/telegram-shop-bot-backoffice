@extends('layouts.authenticated_page')
@section('content')
    <h1 class="text-xl">Todas as mensagens</h1>

    <div class="flex flex-col w-3/4">
        <a href="" class="bg-gray-800 w-max self-end text-white mb-3 p-2 rounded-full">Nova Mensagem</a>
        <div class="border border-gray-300 rounded">
            <table class="w-full">
                <thead class="border-b border-gray-300 bg-gray-100">
                    <tr>
                        <th class="px-3 text-start">Nome</th>
                        <th class="px-3 text-start">Botão</th>
                        <th class="px-3 text-start">Redirecionamentos</th>
                        <th class="px-3 text-start">Criada Em</th>
                        <th class="px-3 text-start">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-3 text-start font-semibold">Principal</td>
                        <td class="px-3 text-start">ir para principal</td>
                        <td class="px-3 text-start">5</td>
                        <td class="px-3 text-start">16/01/2022 16:29</td>
                        <td class="px-3 text-start">
                            <button><i class="bi bi-eye"></i></button>
                            <button><i class="bi bi-pencil-square"></i></button>
                            <button><i class="bi bi-trash3-fill"></i></button>
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="px-3 text-start font-semibold">Principal</td>
                        <td class="px-3 text-start">ir para principal</td>
                        <td class="px-3 text-start">5</td>
                        <td class="px-3 text-start">16/01/2022 16:29</td>
                        <td class="px-3 text-start">
                            <button><i class="bi bi-eye"></i></button>
                            <button><i class="bi bi-pencil-square"></i></button>
                            <button><i class="bi bi-trash3-fill"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-3 text-start font-semibold">Principal</td>
                        <td class="px-3 text-start">ir para principal</td>
                        <td class="px-3 text-start">5</td>
                        <td class="px-3 text-start">16/01/2022 16:29</td>
                        <td class="px-3 text-start">
                            <button><i class="bi bi-eye"></i></button>
                            <button><i class="bi bi-pencil-square"></i></button>
                            <button><i class="bi bi-trash3-fill"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection