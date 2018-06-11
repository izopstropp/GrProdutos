@extends('layouts.app')

@section('title','lista de produtos')

@section('content')

    <h1>Produtos</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('produtos.buscar')}}" method="post">
                @csrf
                <div class="input-group">
                <input type="text" name="busca" class="form-control" id="busca" value="{{!empty($buscar) ? $buscar: ""}}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" >Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @foreach($produtos as $produto)
            <div class="col-md-3">
                @if(file_exists("./img/produtos/".md5($produto->id).".jpg"))
                    <img src={{url("./img/produtos/".md5($produto->id).".jpg")}} alt="imagem do produto" class="img-fluid img-thumbnail">
                @endif
            <h4 class="text-center"><a href={{ route('produtos.show',[$produto->id]) }}>{{$produto->titulo_formatted}}</a></h4>
            <div>
                <form method="POST" action="{{route('produtos.destroy',[$produto])}}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <a href="{{route('produtos.edit',[$produto->id])}}" class="btn btn-primary">Editar</a>
                        <button class="btn btn-danger">excluir</button>
                    </form>
            </div>
            </div>
        @endforeach
    </div>
    {{$produtos->links()}}
@endsection
