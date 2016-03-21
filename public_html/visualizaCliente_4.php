<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 04/03/16
 * Time: 15:02
 */
    # Funcao autoloader no Linux
    define('CLASS_DIR','../src/');
    set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
    spl_autoload_register(function ($class) {
        require_once(str_replace('\\', '/', $class . '.php'));
    });

    use Andrade\Cliente4\Types\ClienteFisico4 as ClienteFisico;
    use Andrade\Cliente4\Types\ClienteJuridico4 as ClienteJuridico;
    use Andrade\Db\Conectar;
    use Andrade\Cliente4\CrudClient;
    $indice = filter_input(INPUT_POST, 'indice', FILTER_SANITIZE_NUMBER_INT);
    $listaCliente = new CrudClient(Conectar::getConexao());
    $dados = $listaCliente->listaClientePeloId($indice);
    if($dados){
        if ($dados->tipocliente == "PF"){
            $clientes = array(new ClienteFisico($dados->id,$dados->nome,$dados->idade, $dados->cpf, $dados->endereco,$dados->endereco_entrega,$dados->importancia));
        }else{
            $clientes = array(new ClienteJuridico($dados->id,$dados->nome,$dados->idade, $dados->cpf, $dados->endereco,$dados->endereco_entrega,$dados->importancia));
        }
    }
    foreach ($clientes as $key=>$value){
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

?>

