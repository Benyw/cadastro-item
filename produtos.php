<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Papelaria do Volmir Peçanha</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="source/logo.png" type="image/x-icon"/>
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
        <b> Papelaria do Volmir Peçanha</b>
      </a>

      <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbar12">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php">Página inicial</a></li>
          <li class="nav-item"><a class="nav-link active-link" href="produtos.php">Produtos</a></li>
        </ul>
      </div>

    </div>
  </nav>
  <!--/NAVBAR-->


  <div class="py-5">
    <div class="container">

      <h1>Cadastro de produtos</h1><br>

      <form id="formCadastro">
        <div class="row">
          <div class="col-md-6">
            <label for="txtCodigoProduto" class="form-label">Código do produto:</label>
            <div class="input-group mb-6">
              <input type="text" class="form-control" id="txtCodigoProduto" name="txtCodigoProduto" placeholder="Digite aqui o código do produto...">
            </div>
          </div>
          <div class="col-md-6">
            <label for="txtNomeProduto" class="form-label">Nome do produto:</label>
            <div class="input-group mb-6">
              <input type="text" class="form-control" id="txtNomeProduto" name="txtNomeProduto" placeholder="Digite aqui o nome do produto...">
            </div>
          </div>
        </div>

        <br>
        
        <div class="row">
          <div class="col-md-6">
            <label for="slUnidadeMedida" class="form-label">Unidade de medida:</label>
            <div class="input-group mb-6">
              <select class="form-select" name="slUnidadeMedida" id="slUnidadeMedida">
                <option value="" selected disabled hidden>Selecione a unidade de medida...</option>
                <option value="KG">Kg</option>
                <option value="MG">MG</option>
                <option value="Uni">Un.</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <label for="slStatus" class="form-label">Situação do produto:</label>
            <div class="input-group mb-6">
              <select class="form-select" name="slStatus" id="slStatus">
                <option value="" selected disabled hidden>Selecione a situação para o produto...</option>
                <option value="1">Disponível</option>
                <option value="2">Indisponível</option>
              </select>
            </div>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-6">
            <label for="slGrupoEstoque" class="form-label">Grupo de estoque:</label>
            <div class="input-group mb-6">
              <select class="form-select" name="slGrupoEstoque" id="slGrupoEstoque">
                <option value="" selected disabled hidden>Selecione o grupo de estoque do produto...</option>
                <option value="1">Opcao 1</option>
                <option value="2">Opcao 2</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <label for="numLoteMinimo" class="form-label">Lote mínimo:</label>
            <div class="input-group mb-3">
              <input type="number" class="form-control" id="numLoteMinimo" name="numLoteMinimo" placeholder="Digite aqui o lote mínimo..." min="0">
            </div>
          </div>
          <div class="col-md-3">
            <label for="numLoteMaximo" class="form-label">Lote máxito:</label>
            <div class="input-group mb-3">
              <input type="number" class="form-control" id="numLoteMaximo" name="numLoteMaximo" placeholder="Digite aqui o lote máxito..." min="0">
            </div>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-6">
            <label for="txtDescricaoProduto" class="form-label">Descrição do produto:</label>
            <div class="input-group mb-6">
              <textarea type="text" class="form-control" id="txtDescricaoProduto" name="txtDescricaoProduto" placeholder="Digite aqui uma breve descrição do seu produto..."></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <label for="txtInformacoesComplementares" class="form-label">Informações complementares:</label>
            <div class="input-group mb-6">
            <textarea type="text" class="form-control" id="txtInformacoesComplementares" name="txtInformacoesComplementares" placeholder="Digite aqui informações complementares do seu produto..."></textarea>
            </div>
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="col-md-6">
            <div class="d-grid gap-2">
              <button class="btn btn-outline-dark" type="button" id="btnCadastrar">Cadastrar</button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-grid gap-2">
              <input type="reset" class="btn btn-outline-danger" value="Cancelar">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!--FOOTER-->
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
          <p>© Copyright <?php echo date("Y"); ?> Papelaria do Volmir Peçanha - Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </div>
  <!--/FOOTER-->

</body>

</html>