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

    <header>
        <i><h1>Pacientes</h1></i>
        <p>Listagem do pacientes do hospital</p>
    </header>

    <section>
        @foreach($pacientes as $e)
        <a href ='/paciente/{{$e->cpf}}'>
        <div class="myBox">
            <p> {{$e->cpf}} </p>
            <p> <i>{{$e->nome}} </i></p>
            <p> <i>{{$e->idade}} anos</i></p>
            <p><i>{{$e->altura}} m</i></p>
            <p><i>{{$e->peso}}kg</i></p>

            <p><i>Índ. Cardíaco: {{$e->ind_cardiaco}}</i></p>
            <p><i>Índ. Pulmonar: {{$e->ind_pulmonar}}</i></p>
        </div>
        </a>        
        @endforeach
    </section>

</body>
</html>