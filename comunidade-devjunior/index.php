<?php
require_once "database/db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo PROJECT_NAME; ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><?php echo PROJECT_NAME; ?></a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL_BASE ?>">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Postagens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Discord</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr>
</header>
<main>
    <center>
        <h2>Bem-vindo à <?php echo PROJECT_NAME; ?>!</h2>
    </center>
    <div class="postagens_last">
        <?php 
        require_once "class/list.php"; 
            $sql->execute();
            $posts = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach($posts as $post){
                echo "
                <div class='card mb-3'>
                    <div class='card-body'>
                        <h5 class='card-title'>". @$post['title'] ."</h5>
                        <p class='card-text'>". @$post['content'] ."</p>
                        <p class='card-text'><small class='text-muted'>Autor: ". @$post['author'] ."</small></p>
                        <p class='card-text'><small class='text-muted'>Categoria: ". @$post['category'] ."</small></p>
                        <p class='card-text'><small class='text-muted'>Publicado em: ". date('d/m/Y H:i', strtotime(@$post['created_at'])) ."</small></p>
                    </div>
                </div>
                ";
            }
        
        ?>


    </div>

</main>

<footer>
<hr>
    <div class="container">
        <div class="maintext" style="text-align: center;">
                <i>
                    <p>A <i><?php echo PROJECT_NAME; ?></i> é um espaço para desenvolvedores iniciantes <b> aprenderem, compartilharem conhecimento e crescerem</b>. 
                    <p>Encontre recursos, tutoriais, projetos e uma comunidade acolhedora para se tornar um desenvolvedor mais confiante.</p>
                    <p>Seja estudante, entusiasta ou iniciante, a <i><?php echo PROJECT_NAME; ?></i> é perfeita para você. Junte-se a nós!</p>

                </i>    
        </div>
        <p>&copy; 2026 <i><?php echo PROJECT_NAME; ?></i>. Todos os direitos reservados.</p>
    </div>
</footer>

</body>
</html>