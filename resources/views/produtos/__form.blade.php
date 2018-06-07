<div class="form-group mb-3 ">
    {{-- <label for="sku">SKU</label> --}}
    {{Form::label('sku','SKU',['class'=>'form-label'])}}
    {{-- <input type="text" class="form-control" id="sku" value="{{$produto->sku}}" name="sku" placeholder="Digite o Código do Produto..." required> --}}
    {{Form::text("sku",old("sku",$produto->sku),["class"=>"form-control","placeholder"=>"digite aqui"])}}
    {{-- @if($errors->has('sku')) --}}
      {{-- <small class="help-block text-danger">{{$errors->first('sku')}}</small> --}}
    {{-- @endif --}}
    <div class="invalid-feedback">
            {{-- {{$errors->first('sku')}} --}}
            <span>"campo vazio"</span>
    </div>
 </div>
 <div class="form-group mb-3">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" id="titulo" value="{{old('titulo',$produto->titulo)}}" name="titulo" placeholder="Digite o Nome do Produto..." required>
 </div>

 <div class="form-group mb-3">
    <label for="descricao">Descrição</label>
       {{-- <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Digite uma breve descrição do Produto..." required>{{old('descricao',$produto->descricao)}}</textarea> --}}
       {{form::textarea('descricao',$produto->descricao,["class"=>"form-control","size"=>"30x4"])}}
 </div>

 <div class="form-group">
    {{form::label('pagamento','Pagamento')}}
    {{form::select('pagamento',
        [
        ""=>"seleciona",
        "1"=>"test",
        "2"=>"test2"
        ],
        old('pagamento',"2"),
        ["class"=>"form-control"])
    }}
</div>
 <div class="form-group">
     <label for="pagamento">Pagamento</label>
     <select name="pagamento" id="pagamento" class="form-control" value="1">
         <option value="" selected="selected">selecione</option>
         <option value="1" selected="selected">test</option>
         <option value="2">test2</option>
     </select>
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
