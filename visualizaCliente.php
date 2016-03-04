<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 04/03/16
 * Time: 15:02
 */
	require_once 'class/Cliente.php';
    $indice = filter_input(INPUT_POST, 'indice', FILTER_SANITIZE_NUMBER_INT);
    $clientes = array(
        0 => new Cliente("Diego Andrade",29, "123.456.789-88", "Rua 1, nº 123 - SP"),
        1 => new Cliente("Jéssica Abreu",25, "789.541.369-01", "Rua 2, nº 222 - SP"),
        2 => new Cliente("Maria do Carmo",23, "987.741.364-05", "Rua 3, nº 333 - SP"),
        3 => new Cliente("João Pedro", 32,"854.001.140-01", "Rua 4, nº 444 - SP"),
        4 => new Cliente("Manoel Cruz", 33,"059.905.154-01", "Rua 5, nº 555 - SP"),
        5 => new Cliente("Eva Alves", 21,"212.413.001-01", "Rua 6, nº 666 - SP"),
        6 => new Cliente("Joaquim Costa",45, "301.102.301-01", "Rua 7, nº 777 - SP"),
        7 => new Cliente("Eliomar Morais",47, "103.054.193-01", "Rod. 8, nº 888 - SP"),
        8 => new Cliente("Carla Amaral",55,"123.789.257-79", "Rua 9, nº 999 - SP"),
        9 => new Cliente("Jeniffer Araújo",60, "231.321.412-01", "Rua 10, nº 1010 - SP")
    );

    foreach ($clientes as $key=>$value){
        if ($key == $indice){
            echo "<p>{$value->getNome()}</p>";
            echo "<p>{$value->getIdade()}</p>";
            echo "<p>{$value->getCpf()}</p>";
            echo "<p>{$value->getEndereco()}</p>";
        }
    }

?>

