<h1>Listar Tarefas</h1>
<?php 
    $sql_query = "SELECT * FROM tarefas";
    $res = $conn->query($sql_query);
    $rows_number = $res->num_rows;
    if($rows_number>0){
        echo "<table class='table table-hover table striped'>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>Título</th>";
        echo "<th>Descrição</th>";
        echo "<th>Opções</th>";
        echo "</tr>";
        while($row = $res->fetch_object()){
            echo "<tr>";
            echo "<td>".$row->id."</td>";
            echo "<td>".$row->titulo."</td>";
            echo "<td>".$row->descricao."</td>";
            echo "<td>
                    <button class='btn btn-success'>Editar</button>
                    <button class='btn btn-danger'>Excluir</button>
                </td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>