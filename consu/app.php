<?php
//DEFINE A URL BASE DA API PARA CONSUMO
define('API_BASE', 'http://localhost/api-php/api/index.php?option=');

echo '<p>Aplicação</p>';

$resultado = api_request('status');

echo '<pre>';
print_r($resultado);

//função para fazer a requisição para api
function api_request($option)
{   //faz a requisição com base a url base junto com o option passado
    $client = curl_init(API_BASE . $option);
     //  CURLOPT_RETURNTRANSFER faz com que o curl_exec retorne o resultado como string e sque seja possivel armazenar em outra variavel em vez de so printar direto sem poder armazenar
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    // faz a requisição a api com base na url de client
    $reponse = curl_exec($client);
    // decodifica  o json e tranforma ele em um array asociativo
    return json_decode($reponse, true);
}

?>