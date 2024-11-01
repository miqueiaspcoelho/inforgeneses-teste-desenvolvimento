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
        case 'editar':
            $titulo = $_POST["titulo"];
            $descricao = $_POST["descricao"];

            $sql_query = "UPDATE tarefas SET titulo='{$titulo}', descricao='{$descricao}' WHERE id=".$_REQUEST["id"];
            
            $res = $conn->query($sql_query);

            if ($res==true){
                echo "<script>alert('Editação realizada com sucesso')</script>";
                echo "<script>location.href='index.php';</script>";
            }else{
                echo "<script>alert('Não foi possível editar')</script>";
                echo "<script>location.href='?page=criar';</script>";
            }

            break;
        case 'excluir':
            $sql_query = "DELETE FROM tarefas WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql_query);

            if ($res==true){
                echo "<script>alert('Exclusão realizada com sucesso')</script>";
                echo "<script>location.href='index.php';</script>";
            }else{
                echo "<script>alert('Não foi possível excluir')</script>";
                echo "<script>location.href='?page=criar';</script>";
            }
            break;
    }
?>