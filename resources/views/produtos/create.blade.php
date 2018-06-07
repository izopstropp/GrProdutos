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
{{-- <form method="POST" action="{{route('produtos.store')}}"> --}}
    {{-- @csrf --}}
    <a href="#" id="cadastro-modal">Abrir form modal</a>
    {{Form::open(['route'=>'produtos.store',"id"=>"form-produto"])}}
    @include('produtos.__form');
    {{Form::submit('Salvar',["class"=>"btn btn-primary","id"=>"salvar"])}}


    {{Form::close()}}
{{-- </form> --}}

<div class="modal fade" id="aviso-cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Adicionado com sucesso
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
            </div>
            </div>
        </div>
    </div>
@endsection


