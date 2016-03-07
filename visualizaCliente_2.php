<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 04/03/16
 * Time: 15:02
 */
	$indice = filter_input(INPUT_POST, 'indice', FILTER_SANITIZE_NUMBER_INT);
    require_once 'class/Cliente.php';
    require_once 'interface/Cliente.php';
    require_once 'class/ClienteFisico.php';
    require_once 'class/ClienteJuridico.php';

    $clientes = array(
        0 => new ClienteFisico("Diego Andrade",29, "123.456.789-88", "Rua 1, nº 123 - SP","RUA ALGO",1),
        1 => new ClienteJuridico("Vanita",25, "789.541.369-01", "Rua 2, nº 222 - SP","RUA ALGO 2",2),
        2 => new ClienteFisico("Maria",23, "987.741.364-05", "Rua 3, nº 333 - SP","RUA ALGO 3",3),
        3 => new ClienteJuridico("João", 32,"854.001.140-01", "Rua 4, nº 444 - SP","RUA ALGO 4",4),
        4 => new ClienteFisico("Jose", 33,"059.905.154-01", "Rua 5, nº 555 - SP","RUA ALGO 5",5),
        5 => new ClienteJuridico("Ana", 21,"212.413.001-01", "Rua 6, nº 666 - SP","",5),
        6 => new ClienteFisico("Joaquim",45, "301.102.301-01", "Rua 7, nº 777 - SP","",5),
        7 => new ClienteJuridico("Carlos",47, "103.054.193-01", "Rod. 8, nº 888 - SP","",4),
        8 => new ClienteFisico("Carla",55,"123.789.257-79", "Rua 9, nº 999 - SP","",3),
        9 => new ClienteJuridico("Debora",60, "231.321.412-01", "Rua 10, nº 1010 - SP","",2)
    );
    foreach ($clientes as $key=>$value){
        if ($key == $indice){
            echo "<p>Nome: {$value->getNome()}</p>";
            echo "<p>Idade: {$value->getIdade()}</p>";
            $tipo = $value->getTipo();
            if ($tipo == "PF") {
                echo "<p>CPF: {$value->getCpf()}</p>";
            }else{
                echo "<p>CNPJ: {$value->getCpf()}</p>";
            }
            echo "<p>Endereco: {$value->getEndereco()}</p>";
            echo "<p>Grau de Importancia: {$value->importancia()}</p>";
            echo "<p>Endereco Para Cobranca: {$value->endCobranca()}</p>";
        }
    }

?>

