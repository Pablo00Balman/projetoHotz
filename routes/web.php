<?php

Route::get('/', [App\Http\Controllers\PacientesController::class, 'list'])->name("Pacientes");

Route::get('/paciente/{cpf}', [App\Http\Controllers\PacientesController::class, 'detalhes']);

Route::get('/autor', function(){
    return "<h3 style='text-align:center;'>O autor da página é <b><i>Pablo Balman</i></b></h3>";
});

?>