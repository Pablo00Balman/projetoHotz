<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PacientesController extends Controller
{
    public function list(){

        $pacientes = DB::select(
        "SELECT p.cpf, p.nome, p.idade, p.altura, p.peso, c.ind_cardiaco, pul.ind_pulmonar FROM ind_cardiaco c
        INNER JOIN  (
            SELECT cpf, MAX(epoch) as epoch
            FROM ind_cardiaco
            GROUP BY cpf
        ) c2
        ON c.cpf = c2.cpf AND c.epoch = c2.epoch
        INNER JOIN (
            SELECT p1.cpf, p1.ind_pulmonar
            FROM ind_pulmonar p1
            INNER JOIN (
                SELECT cpf, MAX(epoch) as epoch
                FROM ind_pulmonar
                GROUP BY cpf
            ) p2
            ON p1.cpf = p2.cpf AND p1.epoch = p2.epoch
        ) pul
        ON c.cpf = pul.cpf
        INNER JOIN pacientes p ON c.cpf = p.cpf;"
        );
        return view("pacientes", ['pacientes'=>$pacientes]);
    }

    public function detalhes ($cpf){

        $resposta = DB::select(
            "SELECT * FROM pacientes WHERE cpf = '$cpf';"); 

        return view('detalhes', ['resposta'=>$resposta]);
    }
}
