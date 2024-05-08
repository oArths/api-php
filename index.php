<?php
//import output.php
include_once('output.php');

// reposta base caso de erro
$data['status'] = 'ERROR';
$data['data'] = [];


if(isset($_GET['option'])){

    switch ($_GET['option']) {
        case 'status':
            define_response($data, 'API JOIA');
            break;
        case 'random':
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
            break;
    }
}
// chamando a resposta da api passando valo de data
response($data);

