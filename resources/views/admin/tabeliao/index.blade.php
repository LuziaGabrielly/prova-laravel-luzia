@extends('layout.site')

@section('titulo', 'tabelioes')

@section('conteudo')
<div class="container">
<div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-9">
                <h3>Lista de Tabelioes</h3>
            </div>
            <div class="col-3">
                <a class="btn btn-success"
                   href="{{ route('tabeliao.adicionar') }}">
                    Adicionar
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if(!empty($mensagem))
                    <div class="alert alert-success">
                        {{ $mensagem }}
                    </div>
                @endif
            </div>

        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($itens as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->nome}}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{route('tabeliao.editar', $item->id_cliente)}}">
                                    Editar</a>
                            </td>
                            <td>
                                <form action="{{route('tabeliao.deletar', $item->id_cliente)}}" method="post"> 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

