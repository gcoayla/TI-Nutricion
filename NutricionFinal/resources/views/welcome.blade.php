@extends('layouts/template')

@section('title', 'Home')

@section('content')

    <header>
    </header>
    <section>
        <div id="datos-nutri"></div>
        <div id="selector-alim"></div>
        <div id="alimentos-cons"></div>
    </section>
    <datalist id="alimentos">
    @foreach ($alimentos as $alimento)
        <option value="{{ $alimento->nombre }}">{{ $alimento->nombre }}</option>
    @endforeach
    </datalist>

<footer></footer>
@endsection