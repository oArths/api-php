<?php

$data = [];

if(isset($_GET['option'])){

    switch ($_GET['option']) {
        case 'status':
            $data['status'] = 'SUCCESS';
            $data['data'] = ' API RUNNING OK!!';
            break;
        default:
            $data['status'] = 'ERROR, option  não encontrada';
            break;
    }
    
    
}else{
    $data['status'] = 'ERROR, option não declarada';
}

response($data);

function response($data_response)
{
    header("Content-Type: application/json");
        echo json_encode($data_response);
}

?>