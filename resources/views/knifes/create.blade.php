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
                <h2 class="text-2xl font-bold mb-4">Afegir Knife</h2>
                <form action="{{ route('knifes.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nom" class="block text-gray-700">Nom:</label>
                        <input type="text" name="nom" id="nom" placeholder="nom" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="tipus" class="block text-gray-700">Tipus:</label>
                        <input type="text" name="tipus" id="tipus" placeholder="tipus" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="float" class="block text-gray-700">Float:</label>
                        <input type="number" step="0.01" name="float" id="float" placeholder="Float" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="lock" class="block text-gray-700">Lock:</label>
                        <input type="checkbox" name="lock" id="lock" class="mt-1 block">
                    </div>
                    <div class="mb-4">
                        <label for="preu" class="block text-gray-700">Preu:</label>
                        <input type="number" step="0.01" name="preu" id="preu" placeholder="Preu" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">Afegir Knife</button>
                        <a href="{{ route('knifes.index') }}" class="ml-2 bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">Tornar a la llista</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

