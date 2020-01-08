@extends('layouts.app')
@section('title','Trainers ')
@section('content')

<img style="height:200px; width: 200px; margin:20px;" class="card-img-top mx-auto d-block  rounded-circle" src="/images/{{$trainer->avatar}}">
<div class="text-center">
	//<h1>{{$trainer->slug}}</h1>
	<h4 class="card-title">{{$trainer->name}}</h4>
	<h5 class="card-title">{{$trainer->descripcion}}</h5>
	<a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
</div>
@endsection