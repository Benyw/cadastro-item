<?php

  require_once("php/Classes/Item.php");

  $obj = new Item();

  $dados = $obj->listarItens();

  $table = "<tbody>";

  for($i = count($dados) - 1; $i >= 0; $i--) {
      $table .= "<tr>";
      $table .= "<td>".$dados[$i]['id']."</td>";
      $table .= "<td>".$dados[$i]['codigo']."</td>";
      $table .= "<td>".$dados[$i]['nome']."</td>";
      $table .= "<td>".$dados[$i]['familia']."</td>";
      $table .= "<td>".$dados[$i]['estabelecimento']."</td>";
      $table .= "<td>".$dados[$i]['situacao']."</td>";
      $table .= "</tr>";
  }

  $table .= "</tbody>";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cadastro de Itens</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <link rel="stylesheet" href="./css/styles.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.8/jquery.mask.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/produtos.js"></script>
</head>

<body>
  
  <!--NAVBAR-->
  <nav class="navbar navbar-expand-md nav-style">
    <div class="container">
      
      <a class="navbar-brand" href="index.php">
        <!-- <img src="source/logo.png" width="50" height="50" alt=""> -->
        <b>Cadastro de Itens</b>
      </a>

      <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbar12">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active-link" href="index.php">Página inicial</a></li>
          <li class="nav-item"><a class="nav-link" href="itens.php">Itens</a></li>
        </ul>
      </div>

    </div>
  </nav>
  <!--/NAVBAR-->


  <div class="py-5">
    <div class="container">
      
      <h1>Itens cadastrados</h1><br>

      <div class="row">
        <div class="col-md-12">

          <div class="table-responsive bg-light">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <th>#</th>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Família</th>
                    <th>Estabelecimento</th>
                    <th>Situação</th>
                </thead>
                <?php echo $table; ?>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!--FOOTER
  <div class="py-5 footer footer-fixed">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <p class="lead"><span class="fa fa-code"></span> Desenvolvido por <b>Márcio Júnior</b></p>
        </div>
        <div class="col-4 col-md-1 align-self-center"><a href="#">
            <i class="fa-brands fa-facebook fa-2x footer-icon"></i>
          </a> </div>
        <div class="col-4 col-md-1 align-self-center"><a href="#">
            <i class="fa-brands fa-twitter fa-2x footer-icon"></i>
          </a> </div>
        <div class="col-4 col-md-1 align-self-center"><a href="#">
            <i class="fa-brands fa-instagram fa-2x footer-icon"></i>
          </a> </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright <?php echo date("Y"); ?> Cadastro de Itens - Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </div>
  <!--/FOOTER-->

</body>

</html>