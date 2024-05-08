<?php
//==================================================
// ENDPOITS/FUNCTION/CONTROLLES
//==================================================
//==================================================
//função apra executar o random
function api_random(&$data){
    // verifica se existe max ou min no get
    $min = 0;
    $max = 1000;
    if(isset($_GET['min'])){
        $min = intval($_GET['min']);

    }
    if(isset($_GET['max'])){
        $max = intval($_GET['max']);

    }
    if($min >= $max){
        response($data);
        return;
    }
    define_response($data, rand($min, $max));
}
//==================================================
// função para checar o etado da api
function api_status(&$data){
    define_response($data, 'API JOIA');

} 
//==================================================
// devolucao de uma hash (consites em pegar o valode de um array pela chave/index dele)
function api_hash(&$data){
    define_response($data, md5(sha1(uniqid())));
    // uniqid(): Gera um identificador único baseado na hora atual em microssegundos.
    // sha1(): tranforma oq foi gerado por uniqid em  uma sequência de caracteres alfanuméricos de 40 caracteres.
    // md5():  caucula a criptografia md5 com base no valor de sha1

}

//==================================================
//definindo os tipos de reposto
function define_response(&$data, $value)
{
     $data['status'] = 'SUCCESS';
     $data['data'] = $value;
}

// ==================================================
//contrução de como vai ser a resposta da api
function response($data_response)
{
    header("Content-Type: application/json");
        echo json_encode($data_response);
}

?>

