@extends('layout.site')

@section('titulo', 'Editar Contrato')


@section('conteudo')
    <div class="container">
        <h3>Editar Contrato</h3>
        <div class="row">
            <form action="{{route('contrato.atualizar', $item->id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('admin.contrato.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
