@extends('layouts.layout')

@section('content')
<h1>{{ $knifes->nom }}</h1>
<p>Type: {{ $knifes->tipus }}</p>
<p>Blade Length: {{ $knifes->float }}</p>
<p>Handle Material: {{ $knifes->lock }}</p>
<p>Price: {{ $knifes->preu }}</p>
<a href="{{ route('knifes.index') }}">Back to list</a>
@endsection
