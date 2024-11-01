<!- conterá os métodos para o CRUD->
<?php 
    switch ($_REQUEST["acao"]) {
        case 'inserir':
            $titulo = $_POST["titulo"];
            $descricao = $_POST["descricao"];

            $sql_query = "INSERT INTO tarefas (titulo, descricao)
            VALUES ('{$titulo}','{$descricao}')";

            $res = $conn->query($sql_query);

            if ($res==true){
                echo "<script>alert('Cadastro realizado com sucesso')</script>";
                echo "<script>location.href='index.php';</script>";
            }else{
                echo "<script>alert('Não foi possível cadastrar')</script>";
                echo "<script>location.href='?page=criar';</script>";
            }
            break;
        case 'label':
            # code...
            break;
        default:
            # code...
            break;
    }
?>