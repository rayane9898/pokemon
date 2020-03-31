@extends('layout/master')

@section('content')
<h1>Je suis un show</h1>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Image</th>
        <th scope="col">level</th>
        <th colspan="2">Action</th>




    </tr>
    </thead>
    <tbody>
        <th scope="row">1</th>
        <td>{{$pokemon->name}}</td>
        <td><img class="" src="{{ asset("storage/".$pokemon->img)}}"></td>
        <td>{{$pokemon->level}}</td>
        <td><a class="btn btn-success" href="">edit</a></td>
        <td><a class="btn btn-success" href="">edit</a></td>


    <tr>

    </tbody>
</table> 
@endsection