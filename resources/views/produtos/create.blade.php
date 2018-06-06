@extends('layouts.app')
@section('title','adicionar produto')

@section('content')
<h1 class="mb-3">Adicionar um novo Produto</h1>

@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{route('produtos.store')}}">
    @csrf
    @include('produtos.__form');
    <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
</form>
@endsection
