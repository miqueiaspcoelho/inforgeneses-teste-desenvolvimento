<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Tarefas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=criar">Criar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=editar">Editar</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <?php 
        switch (@$_REQUEST["page"]) {
            case "criar":
                include("src/pages/criar-tarefa.php");
                break;
            case "editar":
                include("src/pages/editar-tarefa.php");
                break;
            
            default:
                echo "To do List";
                break;
        }
    ?>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>