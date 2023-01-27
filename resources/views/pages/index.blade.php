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
                @forelse($cidades as $cidade)                    
                    <tr>
                        <td class="left-align">{{ $cidade->nome }}</td>
                        <td class="right-align">
                            <a href="{{ route('editar.cidade', $cidade->id) }}"><i class="material-icons grey-text">edit</i></a>
                            <a href="{{ route('deletar.cidade', $cidade->id) }}">
                                <i class="material-icons grey-text">delete_forever</i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Não existem cidades cadastradas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-small waves-effect waves-light" href="{{ route('adicionar.cidade') }}">
                <i class="material-icons">add</i>
            </a>
        </div>

    </section>
@endsection