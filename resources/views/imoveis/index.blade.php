@extends('main')

@section('content')
    <section class="section container">
        <div class="center">
            <h5>Imóveis</h5>
        </div>
        <table class="highligth">
            <thead>
                <tr>
                    <th class="left-align">Cidades</th>
                    <th class="right-align">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($imoveis as $imovel)                    
                    <tr>
                        <td class="left-align">{{ $imovel->nome }}</td>
                        <td class="right-align">
                            <a href="{{ route('editar.cidade', $imovel->id) }}"><i class="material-icons grey-text">edit</i></a>
                            <a href="{{ route('deletar.cidade', $imovel->id) }}">
                                <i class="material-icons grey-text">delete_forever</i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Não existem imóveis cadastrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-small waves-effect waves-light" href="{{ route('imoveis.create') }}">
                <i class="material-icons">add</i>
            </a>
        </div>
    </section>
@endsection