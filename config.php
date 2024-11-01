<!- configurando definições e conexão do banco de dados->
<?php 
    define('HOSTNAME', 'localhost');
    define('USER', 'root');
    define('PASSWORD','');
    define('BASE', 'listatarefas');

    $conn = new mysqli(HOSTNAME,USER, PASSWORD,BASE);
?>