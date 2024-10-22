<!-- extends da index -->
@extends('index')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Produtos</h1>
  </div>

  <div>
    <form action="{{ route('produtos.index') }}" method="get">
        <input type="text" name="pesquisar" placeholder="Digite o nome" >
        <button>Pesquisar</button>
        <a type="button" href="" class="btn btn-success float-end">Incluir Produto</a>
    </form>


        <div class="table-responsive">
            @if($findProduto->isEmpty())
                <!-- <a >Nenhum produto encontrado!</a> -->
                <div class="container mt-4">
                    <!-- Alerta escondido -->
                    <div id="alert-box" class="alert alert-danger mt-3" role="alert" style="display: none;">
                        Nenhum produto encontrado!
                    </div>
                </div>
            @else
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th>Nome</th>
                <th>Valor</th>
                <th>Ações</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($findProduto as $produto )
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ 'R$ '. number_format($produto->valor, 2, ',','.' ) }}</td>
                    <td >
                        <a href="{{ route('produtos.delete')}}" class="btn btn-info btn-sm">Editar</a>
                        <a href="{{ route('produtos.delete')}}" class="btn btn-danger btn-sm">Deletar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
            @endif
        </div>
  </div>
@endsection
