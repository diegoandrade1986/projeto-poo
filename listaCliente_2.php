<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 04/03/16
 * Time: 10:58
 */

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

if (isset($_POST['asc'])) ksort($clientes);
if (isset($_POST['desc'])) krsort($clientes);

/*foreach ($clientes as $c){
    echo $c->getNome() . "<br/>";
}*/
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>POO :: Projeto Fase 2</title>
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
        <meta name="viewport" content="width=device-width, initial-scale=1 ">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
    <div class="container">
        <nav class="navbar navbar-default ">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home </a></li>
                    <li><a href="listaCliente.php">Fase 1</a></li>
                    <li class="active"><a href="listaCliente_2.php">Fase 2<span class="sr-only">(current)</span></a></li>
                </ul>
            </div>
        </nav>
        <h1>Lista de Clientes</h1>
        <form action="" method="post" role="form" class="form-group">
            <button name="asc" type="submit" value="asc" class="btn btn-success">ASC</button>
            <button name="desc" type="submit" value="desc" class="btn btn-danger">DESC</button>
        </form>
        <table class="table table-condensed table-hover table-bordered">
            <tbody>
                <th><b>#</b></th>
                <th><b>Nome Cliente</b></th>
                <th><b>Tipo Pessoa</b></th>
                <th><b>Grau de Importancia</b></th>
                <th><b>Visuzalizar</b></th>
            </tbody>
            <?php
            foreach ($clientes as $key=>$value){
                echo "<tr><td class='chave'>{$key}</td>";
                echo "<td>{$value->getNome()}</td>";
                echo "<td>{$value->getTipo()}</td>";
                echo "<td>{$value->importancia()}</td>";
                echo "<td><input type='button' id='fase2' value='Visualizar' class=\"btn btn-success\"/></td></tr>";
            }
            ?>
        </table>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Detalhes do Cliente</h4>
                </div>
                <div class="modal-body" id="dadosCliente">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <!--<button type="button" class="btn btn-primary">Salvar mudanças</button>-->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modal_2.js"></script>
    <script src="js/bootstrap.js"></script>
    </body>
</html>

