@extends('layout/master')

@section('content')


    <div class="text-center my-5">
        <td><a href="{{route("createPokemon")}}" class="btn btn-warning">Add</a></td>
    </div>


{{-- tableau --}}
    <table class="table table-striped">
        <thead>
        <tr class="">
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Image</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
            @foreach ($pokemon as $pokemons)
            <tr>

            <td>{{$pokemons->id}}</td>
            <td>{{$pokemons->name}}</td>
            <td><img class="" src="{{ asset("storage/".$pokemons->img)}}"></td>
            <td><a href="{{route("showPokemon", $pokemons->id)}}" class="btn btn-primary">show</a></td>

            </tr>
            @endforeach

        </tbody>
    </table>
{{-- tableau --}}

@endsection