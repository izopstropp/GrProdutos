<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Produtos;
use App\Http\Requests\ClientRequest;

class ProdutosController extends Controller
{
    private $produto;
    public function __construct(Produtos $produtos){
        $this->produto = $produtos;
    }
    public function index(){
        $produtos = Produtos::paginate(2);
        return view('produtos.index',compact('produtos'));
    }

    public function show($id){

        $produto = Produtos::find($id);
        return view('produtos.show',compact('produto'));
    }

    public function create(){
        return view('produtos.create',['produto'=>$this->produto] );
    }

    public function store(ClientRequest $request){

        $data = $request->only(array_keys($request->rules()));
        // $this->produto->sku = $request->input('sku');
        // $this->produto->titulo = $request->input('titulo');
        // $this->produto->descricao = $request->input('descricao');
        // $this->produto->preco = $request->input('preco');
        try{
            Produtos::create($data);
            return response()->json('adicionado com sucesso',200);
        }catch(\PDOException $e){
            // return redirect()->route('produtos.create')->with('message','Cadastrado com sucesso');
            return response()->json($e,400);
        }
    }

    public function edit(Produtos $produto){
        //$produto = Produtos::find($id);
        return view('produtos.edit',['produto' => $produto]);
    }

    public function update(ClientRequest $request,$id){

        $produto = Produtos::find($id);

        if($request->hasFile('imgproduto_')){

            $imagem = $request->file('imgproduto_');
            //dd($imagem);
            $nomearquivo = md5($id).".".$imagem->getClientOriginalExtension();
            $request->file('imgproduto_')->move(public_path('./img/produtos/'),$nomearquivo);
        }
        $produto->fill($request->only(array_keys($request->rules()))); // pegando da request apenas os itens que foram validados, retornando assim um array e adequando ele com o fill ao objeto
        // $produto->sku = $request->input('sku');
        // $produto->titulo = $request->input('titulo');
        // $produto->descricao = $request->input('descricao');
        // $produto->preco = $request->input('preco');
        if($produto->save()){
            return redirect()->route('produtos.show',$id)->with('message','Cadastrado com sucesso');
        }
    }
    public function destroy($id){
        $produto = Produtos::find($id);
        if($produto->delete($produto)){
            if(file_exists("./img/produtos/".md5($id).".jpg")){
                unlink("./img/produtos/".md5($id).".jpg");
            }
            return redirect()->back()->with('message','produto excluido com sucesso');
        }
    }
    public function busca(Request $request){
        $buscar =$request->input('busca');
        $produtos = Produtos::where('titulo','LIKE','%'.$buscar.'%')
                        ->orwhere('descricao','LIKE','%'.$buscar.'%')
                        ->paginate(2);

        return view('produtos.index',compact('produtos','buscar'));
    }

}
