<style>
    
    body{
        font-family: Arial, sans-serif;
    }
    
    .pesquisa {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 10px; 
        font-family: Arial, sans-serif;
    }

    .fundo {       
        max-width: 100%; 
        max-height: 100%;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        background-color: #f9f9f9;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-wrap: wrap;
    }

    .resultados {
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #007bff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: inline-table;
        align-items: center;
        justify-content: center;
        text-align: center;
        aspect-ratio: 1 / 1;
    }

    .anos_olimpicos{
        margin-left: 5px;
        margin-right: 5px;
    }

    button {
        padding: 10px 20px;
        margin-left: 5px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: white;
        font-size: 10px;
        cursor: pointer;
        }

    button:hover {
        background-color: #0056b3;
        }

</style>

<form class="pesquisa" action={{ route('quadro_medalhas') }} method="post">
        @csrf
        <select name="ano_olimpico1" class="anos_olimpicos">
            <option>Escolha a data</option>
            @foreach ($anos as $ano)
                <option value="{{ $ano }}" {{ intval($ano_olimpico1) == $ano ? 'selected' : '' }}>{{ $ano }}</option>
            @endforeach
        </select>
        <span>Em comparação a</span>
        <select name="ano_olimpico2" class="anos_olimpicos">
            <option>Escolha a data</option>
            @foreach ($anos as $ano)
                <option value="{{ $ano }}" {{ intval($ano_olimpico2) == $ano ? 'selected' : '' }}>{{ $ano }}</option>
            @endforeach
        </select>
    
        <div>
            <input name="tipo_medalha" id="ouro" value="ouro" {{ $tipo_medalha == 'ouro' ? 'checked' : '' }} type="radio">
            <label for="ouro">Ouro</label>
        </div>
        <div>
            <input name="tipo_medalha" id="prata" value="prata" {{ $tipo_medalha == 'prata' ? 'checked' : '' }} type="radio">
            <label for="prata">Prata</label>
        </div>
        <div>
            <input name="tipo_medalha" id="bronze" value="bronze" {{ $tipo_medalha == 'bronze' ? 'checked' : '' }} type="radio">
            <label for="bronze">Bronze</label>
        </div>
        <button type="submit">Pesquisar</button>
</form>

<div class="fundo">
    
    @foreach ($porcentagem_final as $key => $item)

        <div class="resultados" style="width: {{ (is_numeric($item['percentual']) ? abs($item['percentual']) / 2 : 5) }}%; height: {{ (is_numeric($item['percentual']) ? abs($item['percentual']) / 2 : 5) }}%;">

            <p>{{ $key }}</p>
            <p>{{ $item['percentual'] }}</p>

        </div>    
    @endforeach
</div>

