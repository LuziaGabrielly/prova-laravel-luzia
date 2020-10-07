@extends('layout.site')

@section('titulo', 'contratos')

@section('conteudo')
<div class="container">
<div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-9">
                <h3>Lista de Contratos</h3>
            </div>
            <div class="col-3">
                <a class="btn btn-success"
                   href="{{ route('contrato.adicionar') }}">
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
                        <th scope="col">Tipo</th>
                        <th scope="col">Envolvido 1</th>
                        <th scope="col">Envolvido 2</th>
                        <th scope="col">Data</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Tabeliao</th>
                        <th scope="col">Ações</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($itens as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->tipo_certidao}}</td>
                            <td>{{ $item->envolvido1}}</td>
                            <td>{{ $item->envolvido2}}</td>
                            <td>{{ \Carbon\Carbon::parse($item->data_certidao)->format('d/m/Y') }}</td>
                            <td>{{ $item->valor}}</td>
                            <td>{{ $item->tabeliao}}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{route('certidao.editar', $item->id_cliente)}}">
                                    Editar</a>
                            </td>
                            <td>
                                <form action="{{route('certidao.deletar', $item->id_cliente)}}" method="post"> 
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