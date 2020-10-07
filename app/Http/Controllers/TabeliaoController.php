<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabiliao;

class TabeliaoController extends Controller
{
    public function index(Request $req)
    {   
        $itens = Tabiliao::all();
        $mensagem = $req->session()->get('mensagem');
        return view("admin.tabeliao.index", compact('itens', 'mensagem'));
    }

    public function adicionar()
    {
        return view("admin.tabeliao.adicionar");
    }

    public function salvar(Request $req)
    {
        $item = $req->all();

        Tabiliao::create($item);

        $req->session()
          ->flash(
              'mensagem',
              "Adicionado com sucesso"
          );

        return redirect()->route("tabeliao.index");
    }

    public function editar($id)
    {
        $item = Tabiliao::find($id);

        return redirect()->route("tabeliao.index");
    }

    public function atualizar(Request $req, $id)
    {
        $item = $req->all();


        $itemSelecionado = Tabiliao::find($id);
        $itemSelecionado->update($item);

        $req->session()
            ->flash(
                'mensagem',
                "Atualizado com sucesso"
            );

        return redirect()->route("tabeliao.index");
    }

    public function deletar(Request $req, $id)
    {
        $item = Tabiliao::find($id);
        $item->delete();

        $req->session()
            ->flash(
                'mensagem',
                "Removido com sucesso"
            );

        return redirect()->route("tabeliao.index");
    }

}
