@extends('layouts.layout')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #1a1a1a, #e3342f);
            color: white;
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
                <h2 class="text-2xl font-bold mb-4">Editar Knife</h2>
                <form action="{{ route('knifes.update', $knifes->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="nom" class="block text-gray-700">Nom:</label>
                        <input type="text" name="nom" id="nom" value="{{ $knifes->nom }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="tipus" class="block text-gray-700">Tipus:</label>
                        <input type="text" name="tipus" id="tipus" value="{{ $knifes->tipus }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="float" class="block text-gray-700">Float:</label>
                        <input type="number" step="0.01" name="float" id="float" value="{{ $knifes->float }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="lock" class="block text-gray-700">Lock:</label>
                        <input type="text" name="lock" id="lock" value="{{ $knifes->lock }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="preu" class="block text-gray-700">Preu:</label>
                        <input type="number" step="0.01" name="preu" id="preu" value="{{ $knifes->preu }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">Editar Knife</button>
                        <a class="ml-2 bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded" href="{{ route('knifes.index') }}">Back to List</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



