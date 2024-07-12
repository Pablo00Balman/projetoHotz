<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <title>Pacientes</title>
</head>
<body>

    <div id="pai">
        <div class="info" id="left">
            <p>Nome: <i>{{$resposta[0]->nome}}</i></p>
            <p>Idade: <i>{{$resposta[0]->idade}}</i></p>
            <p>Nascimento: <i>{{$resposta[0]->data_nasc}}</i></p>
            <p>gênero: <i>{{$resposta[0]->sexo}}</i></p>
            <p>Altura: <i>{{$resposta[0]->altura}} metro</i></p>
            <p>Peso: <i>{{$resposta[0]->peso}} kg</i></p>
            <p>Tipo Sanguíneo: <i>{{$resposta[0]->tipo_sanguineo}}</i></p>
        </div>

        <div class="info" id="right">
            <p>CPF: <i>{{$resposta[0]->cpf}}</p>
            <p>RG: <i>{{$resposta[0]->rg}}</p>
            <p>Nome do pai: <i>{{$resposta[0]->pai}}</p>
            <p>Nome da mãe: <i>{{$resposta[0]->mae}}</p>
            <p>Endereço: {{$resposta[0]->endereco}}, Nº {{$resposta[0]->numero}}, {{$resposta[0]->bairro}}.</p> 
            <p>Cidade: {{$resposta[0]->cidade}}, {{$resposta[0]->estado}}.</p> 
        </div>
    </div>

</body>
</html>