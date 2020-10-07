<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certidao;

class CertidaoController extends Controller
{
    public function index(Request $req)
    {   
        $itens = Certidao::all();
        $mensagem = $req->session()->get('mensagem');
        return view("admin.certidao.index", compact('itens', 'mensagem'));
    }

    public function adicionar()
    {
        return view("admin.certidao.adicionar");
    }

    public function salvar(Request $req)
    {
        $item = $req->all();

        Certidao::create($item);

        $req->session()
          ->flash(
              'mensagem',
              "Adicionado com sucesso"
          );

        return redirect()->route("certidao.index");
    }

    public function editar($id)
    {
        $item = Certidao::find($id);

        return redirect()->route("certidao.index");
    }

    public function atualizar(Request $req, $id)
    {
        $item = $req->all();


        $itemSelecionado = Certidao::find($id);
        $itemSelecionado->update($item);

        $req->session()
            ->flash(
                'mensagem',
                "Atualizado com sucesso"
            );

        return redirect()->route("certidao.index");
    }

    public function deletar(Request $req, $id)
    {
        $item = Certidao::find($id);
        $item->delete();

        $req->session()
            ->flash(
                'mensagem',
                "Removido com sucesso"
            );

        return redirect()->route("certidao.index");
    }
}
