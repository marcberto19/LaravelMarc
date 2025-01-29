@extends('layouts.layout')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #1a1a1a, #e3342f);
            color: black;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

    </style>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4">Afegir llibre</h2>
                <form action="{{ route('books.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Nom:</label>
                        <input type="text" name="name" id="name" placeholder="Nom" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="author" class="block text-gray-700">Autor:</label>
                        <input type="text" name="author" id="author" placeholder="Autor" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="releaseYear" class="block text-gray-700">Any de publicació:</label>
                        <input type="number" name="releaseYear" id="releaseYear" placeholder="Any de publicació" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="genre" class="block text-gray-700">Gènere:</label>
                        <input type="text" name="genre" id="genre" placeholder="Gènere" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="preu" class="block text-gray-700">Preu:</label>
                        <input type="number" step="0.01" name="preu" id="preu" placeholder="Preu" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">Afegir llibre</button>
                        <a href="{{ route('books.index') }}" class="ml-2 bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">Tornar a la llista</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


