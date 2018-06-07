@extends('layouts.app')
@section('title','editar produto :'.$produto->titulo)

@section('content')
<h1 class="mb-3">Editar um Produto {{$produto->titulo}}</h1>

@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
{{-- <form method="POST" enctype="multipart/form-data" action="{{route('produtos.update',[$produto->id])}}"> --}}

    {{-- {{ method_field('PUT') }} --}}
    {{-- <input type="hidden" name="id" value="{{$produto->id}}"> --}}
    {{-- @csrf --}}
    {{-- @include('produtos.__form') --}}
    {{-- <button type="submit" class="btn btn-primary">atualizar Produto</button> --}}
    {{-- </form> --}}
{{Form::open(['route'=>['produtos.update',$produto->id],'method'=>'put'])}}
    @include('produtos.__form')
    {{Form::submit('Editar')}}
{{Form::close()}}

@endsection
