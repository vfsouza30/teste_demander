<style>

    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh; 
        margin: 0; 
        font-family: Arial, sans-serif;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        background-color: #f9f9f9;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        margin: 0;
        font-size: 24px;
        text-align: center;
    }

    input {
        width: 100%;
        max-width: 300px;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        }

    button {
        padding: 10px 20px;
        margin-top: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: white;
        font-size: 16px;
        cursor: pointer;
        }

    button:hover {
        background-color: #0056b3;
        }

    .conteudo {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    .erro{
        display: flex;
        flex-direction: column;
        align-items: center;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        background-color: #007bff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        color: white;
    }

</style>


    <div class="conteudo">
            @if(session('mensagem'))
                <div class="erro">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('mensagem') }}                   
                    </div>
                </div>        
        @endif
        <form action={{ route('conversor') }} method="post">
        @csrf
        <h1>Conversão Romano para Arábico</h1>
        <input name="form1_romano" value="{{ old('form1_romano') }}" type="text" placeholder="Digite o algarismo romano">
        <input name="form1_arabico" value="{{ (isset($resposta) && $resposta != 0) ? $resposta : '' }}" type="text" placeholder="Digite o algarismo arabico" readonly=true>
        <br/>
        <br/>
        <h1>Conversão Arábico para Romano</h1>
        <input name="form2_arabico" value="{{ old('form2_arabico') }}" type="text" placeholder="Digite o algarismo arabico">
        <input name="form2_romano" value="{{ (isset($resposta2)) ? $resposta2 : '' }}" type="text" placeholder="Digite o algarismo romano" readonly=true>
        <br />
        <button type="submit">Converter</button>
        </form>
    </div>
