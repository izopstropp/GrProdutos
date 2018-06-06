
<div class="form-group mb-3">
    {{-- <label for="sku">SKU</label> --}}
    {{Form::label('SKU')}}
    {{-- <input type="text" class="form-control" id="sku" value="{{$produto->sku}}" name="sku" placeholder="Digite o Código do Produto..." required> --}}
    {{Form::text('name')}}
 </div>
 <div class="form-group mb-3">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" id="titulo" value="{{$produto->titulo}}" name="titulo" placeholder="Digite o Nome do Produto..." required>
 </div>
 <div class="form-group mb-3">
    <label for="descricao">Descrição</label>
       <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Digite uma breve descrição do Produto..." required>{{$produto->descricao}}</textarea>
 </div>
 <label for="preco">Preço</label>
 <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">R$</span>
    </div>
    <input type="number" step=".01" class="form-control" value="{{$produto->preco}}" id="preco" name="preco" placeholder="0,00" required>
 </div>
 @if(isset($produto->id))
    <div class="input-group mb-3">
        <input type="file" class="form-control-file" name="imgproduto " id="imgproduto">
    </div>
 @endif
