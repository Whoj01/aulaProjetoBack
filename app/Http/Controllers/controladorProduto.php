<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class controladorProduto extends Controller
{
    public function getAllProducts(){
        $products = Produtos::get()->toJson(JSON_PRETTY_PRINT);
        return response($products, 200);
    }

    public function deleteProduct($id) {
        if(Produtos::where('id', $id)->exists()){
            $produto = Produtos::find($id);
            $produto->delete();
            return response()->json([
                "message" => "Produto excluido com sucesso"
            ], 200);
        }

        return response()->json([
            "message" => "Nao foi possivel excluir o produto"
        ], 404);
    }

    

    public function createProduct(Request $request ){
       $produto = new Produtos;
       $produto->nome = $request->nome;
       $produto->stock = $request->stock;
       $produto->preco = $request->preco;
       $produto->categoria_id = $request->categoria_id;
       $produto->save();
       return response()->json([
        "message" => "produto criado"
    ], 201);
    }

    public function updateProduct(Request $request, $id){
        if(Produtos::where('id', $id)->exists()){
            $produto = Produtos::find($id);
            $produto->nome = is_null($request->nome) ? $produto->nome : $request->nome;
            $produto->stock = is_null($request->stock) ? $produto->stock : $request->stock;
            $produto->preco = is_null($request->preco) ? $produto->preco : $request->preco;
            $produto->categoria_id = is_null($request->categoria_id) ? $produto->categoria_id : $request->categoria_id;
            $produto->save();
            return response()->json([
                "message" => "Produto atualizado"
            ], 200);
        }
        return response()->json([
            "message" => "nao foi possivel atualizar o produto"
        ], 404);
    }
}
