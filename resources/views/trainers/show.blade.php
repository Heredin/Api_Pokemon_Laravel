@extends('layouts.app')

@section('title','Trainer')
@section('content')
@include('trainers.common.success')
<img style="heigth: 200px; width: 200px; background-color: #EFEFEF; margin:20px;"
 class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
<div class="text-center">
<h5 class="card-title">{{$trainer->name}}</h5>

<p>Some quick example text to build on the card title and make up
    the bulk of the card's content.</p>
    <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
    <br>
    {!!Form::open(['route' =>['trainers.destroy',$trainer->slug],'method'=>'DELETE'])!!}
    {!!Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
    {!! Form::close()!!}
</div>
<modal-button></modal-button>
<create-form-pokemon></create-form-pokemon>
<list-of-pokemons></list-of-pokemons>
@endsection

