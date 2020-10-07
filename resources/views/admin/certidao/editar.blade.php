@extends('layout.site')

@section('titulo', 'Editar Certidao')


@section('conteudo')
    <div class="container">
        <h3>Editar Certidão</h3>
        <div class="row">
            <form action="{{route('certidao.atualizar', $item->id_cliente)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('admin.certidao.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
