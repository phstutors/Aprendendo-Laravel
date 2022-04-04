@extends('layouts.app')

@section('content')

<h1>Listagem dos usuarios:
    <a href="{{route('users.create')}}">+</a>
</h1>

@foreach ($users as $user)
    <ul>
        <li>Nome: {{$user->name}}  
            Email: {{$user->email}}
            <a href="{{route('users.show', $user->id)}}">Detalhes</a>
        </li>
        @endforeach
    </ul>
@endsection