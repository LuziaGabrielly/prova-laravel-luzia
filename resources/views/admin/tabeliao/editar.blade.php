@extends('layout.site')

@section('titulo', 'Editar Tabeliao')


@section('conteudo')
    <div class="container">
        <h3>Editar Tabeliao</h3>
        <div class="row">
            <form action="{{route('tabeliao.atualizar', $item->id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">   
                @include('admin.tabeliao.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
