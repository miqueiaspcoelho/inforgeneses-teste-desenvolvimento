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
                    <button onclick= \"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    <button onclick= \"if(confirm('Deseja excluir?')){location.href='?page=gerenciar&acao=excluir&id=".$row->id."';}else{false}\"  class='btn btn-danger'>Excluir</button>
                </td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>