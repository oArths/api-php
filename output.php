<?php
//definindo os tipos de reposto
//==================================================
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

