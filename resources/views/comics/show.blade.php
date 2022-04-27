@extends('layouts.layouts')

@section('contentMain')
<div class="wrapper-card">
    <ul>
        <li class="image-comics"><img src="{{$comic['thumb']}}" alt=""></li>
        <li class="title">{{$comic['title']}}</li>
        <li class="subtitle">{{$comic['price']}}$</li>
        <li class="subtitle">{{$comic['series']}}</li>
        <li class="subtitle">{{$comic['sale_date']}}$</li>
        <li class="subtitle">{{$comic['type']}}</li>
        <li class="subtitle">{{$comic['description']}}$</li>

    </ul>
</div>
@endsection