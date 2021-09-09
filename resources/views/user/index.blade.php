@extends('layouts.layout')

@section('title', 'Cursos')

@section('content')


<h1>Bienvenido a la seccion de los usuarios </h1>

<div class="row">
    @foreach($user as $user)
        <div class="col-sm">
            <div class="card text-center" Style= "width: 18rem; margin-top:50px;">
                    <div class="card-body ">
                    <h5 class="card-title">{{$user->name}}</h5>
                    <p class="card-text"> una descripcion de ejemplo para rellenar con un poco de codigo hardcore y que nos muestre como esta quedando la listilla aguante informatica </p>
                    <a href="/user/{{$user->id}}" class="btn btn-primary">Ver mas...{{$user->id}}</a>
                </div>
            </div>
        </div>
    @endforeach
</div>



@endsection

