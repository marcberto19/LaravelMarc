@extends('layouts.layout')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #1a1a1a, #e3342f);
            color: black;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }
    </style>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4">Llista de Knives</h2>
                <div class="flex justify-end mb-4">
                    <a class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded" href="{{ route('knifes.create') }}">Afegir Knife</a>
                </div>
                <div class="overflow-x-auto">
                    <div class="hidden md:block">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipus</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Float</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lock</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Preu</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($knifes as $knife)
                                <tr class="hover:bg-gray-100">
                                    <td class="px-6 py-4 text-sm text-gray-900"><a class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('knifes.show', $knife->id) }}">{{ $knife->id }}</a></td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $knife->nom }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $knife->tipus }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $knife->float }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $knife->lock}}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">${{ $knife->preu }}</td>
                                    <td class="px-6 py-4 text-sm flex space-x-2">
                                        <a class="bg-yellow-500 hover:bg-yellow-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('knifes.edit', $knife->id) }}">Editar</a>
                                        <a class="ml-2 bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('knifes.delete', $knife->id) }}">Esborrar</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-4 text-center text-sm text-gray-500">No hi han dades a la Base de dades!</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="block md:hidden">
                        <ul class="divide-y divide-gray-200">
                            @forelse($knifes as $knife)
                                <li class="py-4 flex flex-col">
                                    <div class="flex justify-between items-center">
                                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('knifes.show', $knife->id) }}">ID: {{ $knife->id }}</a>
                                        <div class="flex space-x-2">
                                            <a class="bg-yellow-500 hover:bg-yellow-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('knifes.edit', $knife->id) }}">Editar</a>
                                            <a class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('knifes.delete', $knife->id) }}">Esborrar</a>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-900"><strong>Nom:</strong> {{ $knife->nom }}</p>
                                        <p class="text-sm text-gray-900"><strong>Tipus:</strong> {{ $knife->tipus }}</p>
                                        <p class="text-sm text-gray-900"><strong>Float:</strong> {{ $knife->float }}</p>
                                        <p class="text-sm text-gray-900"><strong>Lock:</strong> {{ $knife->lock}}</p>
                                        <p class="text-sm text-gray-900"><strong>Preu:</strong> ${{ $knife->preu }}</p>
                                    </div>
                                </li>
                            @empty
                                <li class="py-4 text-center text-sm text-gray-500">No hi han dades a la Base de dades!</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

