@extends('main')

@section('title', 'Imob | Cidades')

@section('content')
    <section class="section container">
        <div class="center">
            <h5>Listagem de cidades</h5>
        </div>
        <table class="highligth">
            <thead>
                <tr>
                    <th class="left-align">Cidades</th>
                    <th class="right-align">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cidades as $cidade)                    
                    <tr>
                        <td class="left-align">{{ $cidade->nome }}</td>
                        <td class="right-align">
                           <a href="{{ route('deletar.cidade', ['idCidade' => $cidade->id])  }}" class="btn btn-small red waves-effect">Excluir</a>
                           <a href="" class="btn btn-small waves-effect">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-small waves-effect waves-light" href="{{ route('adicionar.cidade') }}">
                <i class="material-icons">add</i>
            </a>
        </div>
    </section>
@endsection