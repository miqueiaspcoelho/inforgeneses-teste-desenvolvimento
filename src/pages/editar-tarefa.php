<!- form para editar uma tarefa- possui campo título e descrição->
<h1>Editar Tarefa</h1>
<?php 
    $sql_query = "SELECT * FROM tarefas WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql_query);
    $row = $res->fetch_object();
?>
<form action="?page=gerenciar" method="POST">
    <input type="hidden" name="acao" value="editar"/>
    <input type="hidden" name="id" value=" <?php echo $row->id; ?>"/>
    <div class="mb-3">
        <label>Titulo</label>
        <input type="text" name="titulo" class="form-control" value="<?php echo $row->titulo;?>"/>
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control" value="<?php echo $row->descricao;?>"/>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Criar</button>
    </div>
</form>