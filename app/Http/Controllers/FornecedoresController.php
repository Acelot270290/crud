<?php

namespace App\Http\Controllers;

use App\Models\Fornecedores;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FornecedoresController extends Controller
{
    public function index(){

        $fornecedores = Fornecedores::select('id', 'nome','documento','email','email','cep','cidade','estado','pais','telefone','dados_bancarios','created_at')->get();

       
        return view('fornecedores.index',compact('fornecedores'));
    }

    public function adicionar(Request $request){
        $fornecedor = new Fornecedores();
        $fornecedor->nome = $request->nome;
        $fornecedor->documento = $request->documento;
        $fornecedor->email = $request->email;
        $fornecedor->cep = $request->cep;
        $fornecedor->cidade = $request->cidade;
        $fornecedor->estado = $request->estado;
        $fornecedor->pais = $request->pais;
        $fornecedor->telefone = $request->telefone;
        $fornecedor->dados_bancarios = $request->dadosBancarios;
        $fornecedor->save();

        Alert::success('Salvo', 'Dados Salvo com Sucesso!');
        return back();
    
    }


    public function getanexosfornecedores($fornecedor)
    {


        $fornecedor = Fornecedores::select('id', 'nome','documento','email','email','cep','cidade','estado','pais','telefone','dados_bancarios','created_at')->where(
            'id',
            $fornecedor
        )->get();

        return response()->json($fornecedor);

        echo print_r($fornecedor);
    }

    public function update(Request $request){
        $fornecedor = Fornecedores::find($request->id);
        $fornecedor->nome = $request->edit_nome;
        $fornecedor->documento = $request->edit_documento;
        $fornecedor->email = $request->edit_email;
        $fornecedor->cep = $request->edit_cep;
        $fornecedor->cidade = $request->edit_cidade;
        $fornecedor->estado = $request->edit_estado;
        $fornecedor->pais = $request->edit_pais;
        $fornecedor->telefone = $request->edit_telefone;
        $fornecedor->dados_bancarios = $request->edit_dadosBancarios;
        $fornecedor->save();

        Alert::success('Atualizado', 'Dados Atualizado com Sucesso!');
        return back();
    
    }

    public function delete($id)
{
    $fornecedor = Fornecedores::find($id);

    if (!$fornecedor) {
        return response()->json(['status' => 'error', 'msg' => 'Fornecedor não encontrado']);
    }

    $fornecedor->delete();

    return response()->json(['status' => 'success', 'msg' => 'Fornecedor excluído com sucesso']);
}

}
