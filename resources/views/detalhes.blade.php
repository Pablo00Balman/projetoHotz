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
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <a href="/" style="text-decoration: none;"><button  class="myBox" style="box-shadow: 0 0 0.5em black; border:0 ; border-radius: 5px;">Voltar</button></a>

    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
    
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
        <br><br>
        <div id="cardiaco" class="grafico"></div>
        <br><br>
        <div id="pulmonar" class="grafico"></div>
    
    </div>

    <footer style="height: 0px;">

    </footer>
</body>



<script>
    var data = {!! json_encode($ind_card) !!};

    var card = data.map(function(item) {
        return [item.epoch * 1000, item.ind_cardiaco]; 
    });

    var data = {!! json_encode($ind_pulm) !!};
    var pulm = data.map(function(item) {
        return [item.epoch * 1000, item.ind_pulmonar]; 
    });

    card = card.sort();
    pulm = pulm.sort()

    Highcharts.chart('cardiaco', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Índice Cardíaco'
        },
        xAxis: {
            type: 'datetime',
            title: {
                text: 'Epoch'
            }
        },
        yAxis: {
            title: {
                text: 'Índice Cardíaco'
            }
        },
        series: [{
            name: 'Índice Cardíaco',
            data: card
        }],
        tooltip: {
            xDateFormat: '%Y-%m-%d %H:%M:%S',
            shared: true
        }
    });

    Highcharts.chart('pulmonar', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Índice Pulmonar'
        },
        xAxis: {
            type: 'datetime',
            title: {
                text: 'Epoch'
            }
        },
        yAxis: {
            title: {
                text: 'Índice Pulmonar'
            }
        },
        series: [{
            name: 'Índice Pulmonar',
            data: pulm
        }],
        tooltip: {
            xDateFormat: '%Y-%m-%d %H:%M:%S',
            shared: true
        }
    });

   
</script>

</html>

