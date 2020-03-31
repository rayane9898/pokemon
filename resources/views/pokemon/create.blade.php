@extends('layout/master')

@section('content')

<h1 class="bg-warning text-center">j'ajoute un pokemon</h1>


<form action="{{route("storePokemon")}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- name --}}
    <input class="form-control my-5" type="text" placeholder="name" name="name">
    {{-- name --}}
    
    {{-- level --}}
        <input class="form-control my-5" type="text" placeholder="level" name="level">
    {{-- level --}}
    
    {{-- image --}}
        <div class="form-group my-5">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
          </div>
    {{-- image --}}
    
    {{-- types --}}
    <label class="mt-5">types</label>
    <select class="form-control mb-5" id="exampleFormControlSelect1" name="type">
        @foreach ($type as $types)        
    <option value="{{$types->id}}">{{$types->type}}</option>
        @endforeach
    
      </select>
    {{-- types --}}

      <div class="text-center">
          <button class="btn btn-primary" type="submit">submit</button>
      </div>
    
    @endsection
</form>