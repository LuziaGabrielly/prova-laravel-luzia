<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;

class ContratoController extends Controller
{
    public function index(Request $req)
    {   
        $itens = Contrato::all();
        $mensagem = $req->session()->get('mensagem');
        return view("admin.contrato.index", compact('itens', 'mensagem'));
    }

    public function adicionar()
    {
        return view("admin.contrato.adicionar");
    }

    public function salvar(Request $req)
    {
        $item = $req->all();

        Contrato::create($item);

        $req->session()
          ->flash(
              'mensagem',
              "Adicionado com sucesso"
          );

        return redirect()->route("contrato.index");
    }

    public function editar($id)
    {
        $item = Contrato::find($id);

        return redirect()->route("contrato.index");
    }

    public function atualizar(Request $req, $id)
    {
        $item = $req->all();


        $itemSelecionado = Contrato::find($id);
        $itemSelecionado->update($item);

        $req->session()
            ->flash(
                'mensagem',
                "Atualizado com sucesso"
            );

        return redirect()->route("contrato.index");
    }

    public function deletar(Request $req, $id)
    {
        $item = Contrato::find($id);
        $item->delete();

        $req->session()
            ->flash(
                'mensagem',
                "Removido com sucesso"
            );

        return redirect()->route("certidao.index");
    }
}
