<?php
//==================================================
// API ROUTES
//==================================================

//import output.php
include_once('output.php');

// reposta base caso de erro (PREPARE RESPONSE)
$data['status'] = 'ERROR, option nao declarado';
$data['data'] = [];

// SWITCH COM TODAS AS POSSIBILIDADES DE E OPÇÃO QUE A API PDE FAZER
// (API ROUTES)
if(isset($_GET['option'])){

    switch ($_GET['option']) {
        case 'status':
            api_status($data);
            break;
        case 'random':
            api_random($data);
            break;
        case 'hash':
            api_hash($data);
            break;
        default:
            $data['status'] = 'ERROR, valor de option nao encontrado';
            $data['data'] = [];
            break;

    }
}
// chamando a resposta da api passando valo de data
// (API RESPONSE)
response($data);

