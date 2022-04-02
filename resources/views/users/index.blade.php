<h1>Listagem dos usuarios:</h1>

@foreach ($users as $user)
    <ul>
        <li>Nome: {{$user->name}}  
            Email: {{$user->email}}
            <a href="{{route('users.show', $user->id)}}">Detalhes</a>
        </li>
    </ul>
@endforeach