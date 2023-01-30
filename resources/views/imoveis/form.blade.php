@extends('main')

@section('content')
    <section class="section container">
        <form action="{{ route('imoveis.save') }}" method="POST">
            @csrf
            {{-- campo de titulop --}}
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" name="titulo" id="titulo">
                    <label for="titulo">Titulo</label>
                </div>
            </div>

            {{-- campo de cidades --}}
            <div class="row">
                <div class="input-field col s12">
                    <select name="cidade_id" id="cidade_id">
                        <option value="" disabled selected>Selecione a cidade</option>
                        @foreach($cidades as $cidade)
                            <option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
                        @endforeach
                    </select>
                    <label for="cidade_id">Cidade</label>
                </div>
            </div>

            {{-- campo de tipos --}}
            <div class="row">
                <div class="input-field col s12">
                    <select name="tipo_id" id="tipo_id">
                        <option value="" disabled selected>Selecione o tipo do imóvel</option>
                        @foreach($tipos as $tipo)
                            <option value="{{ $tipo->id }}">{{ $tipo->nome }}</option>
                        @endforeach
                    </select>
                    <label for="tipo_id">Tipo</label>
                </div>
            </div>

            {{-- campo de finalidades --}}
            <div class="row">
                <div class="col s12">
                    @foreach($finalidades as $finalidade)
                        <span>
                            <label style="margin-right: 30px;">
                                <input type="radio" name="finalidade_id" id="finalidade_id" 
                                class="with-gap" value="{{ $finalidade->id }}">
                                <span>{{ $finalidade->nome }}</span>
                            </label>
                        </span>
                    @endforeach    
                </div>
            </div>

            {{-- preço dormitórios salas --}}
            <div class="row">
                <div class="col s12" style="padding-left: 0; padding-right: 0;">
                    <div class="input-field col s4">
                        <input type="number" name="preco" id="preco">
                        <label for="preco">Preço</label>
                    </div>
    
                    <div class="input-field col s4">
                        <input type="number" name="dormitorios" id="dormitorios">
                        <label for="dormitorios">Quantidade de dormitórios</label>
                    </div>
    
                    <div class="input-field col s4">
                        <input type="number" name="salas" id="salas">
                        <label for="salas">Quantidade de salas</label>
                    </div>
                </div>
            </div>

            {{-- terreno banheiros garagens --}}
            <div class="row">
                <div class="col s12" style="padding-left: 0; padding-right: 0;">
                    <div class="input-field col s4">
                        <input type="number" name="terreno" id="terreno">
                        <label for="terreno">Terreno em m²</label>
                    </div>
    
                    <div class="input-field col s4">
                        <input type="number" name="banheiros" id="banheiros">
                        <label for="banheiros">Quantidade de banheiros</label>
                    </div>
    
                    <div class="input-field col s4">
                        <input type="number" name="garagens" id="garagens">
                        <label for="garagens">Quantidade de garangens</label>
                    </div>
                </div>
            </div>

            {{-- descrição --}}
            <div class="row">
                <div class="input-field col s12">
                    <textarea class="materialize-textarea" name="descricao" id="descricao"></textarea>
                    <label for="descricao">Descrição</label>
                </div>
            </div>

            {{-- endereço --}}
            <div class="row">
                <div class="input-field col s4">
                    <input type="text" name="rua" id="rua">
                    <label for="rua">Rua</label>
                </div>

                <div class="input-field col s1">
                    <input type="number" name="numero" id="numero">
                    <label for="numero">Número</label>
                </div>

                <div class="input-field col s3">
                    <input type="text" name="complemento" id="complemento">
                    <label for="complemento">Complemento</label>
                </div>

                <div class="input-field col s4">
                    <input type="text" name="bairro" id="bairro">
                    <label for="bairro">Bairro</label>
                </div>
            </div>

             {{-- campo de proximidades --}}
             <div class="row">
                <div class="input-field col s12">
                    <select name="proximidades[]" id="proximidades" multiple>
                        <option value="" disabled selected>Selecione os pontos de interesse nas proximidades</option>
                        @foreach($proximidades as $proximidade)
                            <option value="{{ $proximidade->id }}">{{ $proximidade->nome }}</option> 
                        @endforeach
                    </select>
                    <label for="proximidade">Proximidades</label>
                </div>
            </div>

            <div class="right-align">
                <a href="{{ route('imoveis.index') }}" class="btn-flat waves-effect">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">
                    Salvar
                </button>
            </div>  
        </form>
    </section>
@endsection