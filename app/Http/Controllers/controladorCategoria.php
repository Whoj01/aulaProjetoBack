<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class controladorCategoria extends Controller

{
    public function createCategoria(Request $request){
        $categoria = new Categoria;
        $categoria->nome = $request->nome;
        $categoria->save();
        return response()->json([
            "message" => "Categoria criada"
        ], 200);
    }

    public function getAllCategorias(){
        $categorias = Categoria::get()->toJson(JSON_PRETTY_PRINT);
        return response($categorias, 200);
    }

    public function updateCategoria(Request $request, $id){
         if(Categoria::where('id', $id)->exists()){
          $categoria = Categoria::find($id);
          $categoria->nome = is_null($request->nome) ? $categoria->nome : $request->nome;
          $categoria->save();
          return response()->json([
            "message" => "categoria atualizada"
          ], 200);
         }

         return response()->json([
            "message" => "nao foi possivel atualizar a categoria"
         ], 404);
    }

    public function deleteCategoria( $id) {
        if(Categoria::where('id', $id)->exists()) {
            $categoria = Categoria::find($id);
            $categoria->delete();

            return response()->json([
                "message" => "categoria deletada"
              ], 200);
        }
        return response()->json([
            "message" => "nao foi possivel deletar a categoria"
         ], 404);
    }
}
