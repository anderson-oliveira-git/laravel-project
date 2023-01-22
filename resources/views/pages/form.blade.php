@extends('main')

@section('title', 'Imob | listagem')

@section('content')
    <section class="section container">
        <form class="col s12" action="{{ route('salvar.cidade')  }}" method="POST">
            @csrf

            <div class="input-field">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="right-align">
                <a href="{{ route('index') }}" class="btn-flat waves-effect">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">
                    Salvar
                </button>
            </div>  
        </form>
    </section>
@endsection