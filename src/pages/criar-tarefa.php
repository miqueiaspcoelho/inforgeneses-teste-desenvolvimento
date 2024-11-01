<!- form para cadastro de uma nova tarefa- possui campo título e descrição->
<h1>Criar Tarefa</h1>
<form action="?page=gerenciar" method="POST">
    <input type="hidden" name="acao" value="inserir"/>
    <div class="mb-3">
        <label>Titulo</label>
        <input type="text" name="titulo" class="form-control"/>
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control"/>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Criar</button>
    </div>
</form>