@extends('main')

@section('title', 'Imob | Edição')

@section('content')
    <section class="section container">
        <form class="col s12" action="{{ route('update.cidade', $cidade->id) }}" method="POST">
            @csrf

            <div class="input-field">
                <input type="text" name="nome" id="nome" value="{{ $cidade->nome }}">
                <label for="nome">Nome</label>
                @error('nome')
                    <span class="red-text text-accent-3 "><small>{{ $message }}</small></span>
                @enderror
            </div>

            <div class="right-align">
                <a href="{{ route('index') }}" class="btn-flat waves-effect">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">
                    Atualizar
                </button>
            </div>  
        </form>
    </section>
@endsection