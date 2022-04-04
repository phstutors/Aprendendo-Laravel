@extends('layouts.app')

@section('content')
    <h1> Ola Mundo</h1>

    <form action="{{route('users.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Seu Nome">
        <input type="email" name="email" placeholder="Seu Email">
        <input type="password" name="password" placeholder="Sua Senha">
        <input type="submit">

    </form>
@endsection