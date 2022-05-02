
@extends('layouts.layouts')

@section('contentMain')
<form action="{{ route('comics.store') }}" method="post">
    @csrf

    <label for="title">Titolo</label>
    <input type="text" name="title" value="{{old('title')}}"><br>

    <label for="description">Descrizione</label>
    <textarea name="description" id="" cols="30" rows="10" value="{{old('description')}}"></textarea><br>

    <label for="thumb">Immagine</label>
    <input type="text" name="thumb" value="{{old('thumb')}}"><br>

    <label for="price">Prezzo</label>
    <input type="text" name="price" value="{{old('price')}}"><br>

    <label for="series">Serie</label>
    <input type="text" name="series" value="{{old('series')}}"><br>

    <label for="sale_date">In vendita dal</label>
    <input type="text" name="sale_date" value="{{old('sale_date')}}"><br>

    <label for="type">Tipo</label>
    <input type="text" name="type" value="{{old('type')}}"><br>

    <input type="submit" value="Invia"><br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</form>

@endsection