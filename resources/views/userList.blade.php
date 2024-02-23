@extends('app2')

@section('content')
    <div class="container">
        <h1>Liste des utilisateurs</h1>
        <div class="row">
            @foreach($users as $user)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body d-flex align-items-center"> <!-- Added d-flex and align-items-center -->
                            <div>
                                <h5 class="card-title">{{ $user->firstName }} {{ $user->lastName }}</h5>
                                <p class="card-text">{{ $user->email }}</p>
                                <a href="/chatify/{{ $user->id }}" class="btn btn-primary">Contacter</a>
                            </div>
                            <div class="ml-auto"> 
                                @if ($user->image)
                                    <img class="rounded-circle" width="150px" src="{{ asset('storage/' . $user->image) }}" alt="user photo">
                                @else
                                    <img class="rounded-circle" width="150px" src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png" alt="user photo">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
