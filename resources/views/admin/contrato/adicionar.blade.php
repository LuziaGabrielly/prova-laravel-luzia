@extends('layout.site')

@section('titulo', 'Adicionar Contrato')


@section('conteudo')
    <div class="container">
        <h3>Adicionar Contrato</h3>
        <div class="row">
            <form action="{{ route('contrato.salvar') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @include('admin.contrato.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
