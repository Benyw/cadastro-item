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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="js/itens.js"></script>
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
          <li class="nav-item"><a class="nav-link" href="index.php">Página inicial</a></li>
          <li class="nav-item"><a class="nav-link active-link" href="itens.php">Itens</a></li>
        </ul>
      </div>

    </div>
  </nav>
  <!--/NAVBAR-->


  <div class="py-5">
    <div class="container">

      <h1>Cadastro de novo item</h1><br>

      <form id="formCadastro">
        <div class="row">
          <div class="col-md-6">
            <label for="txtCodigoItem" class="form-label">Código do item:</label>
            <div class="input-group mb-6">
              <input type="text" class="form-control" id="txtCodigoItem" name="txtCodigoItem" placeholder="Digite aqui o código do item...">
            </div>
          </div>
          <div class="col-md-6">
            <label for="txtNomeItem" class="form-label">Nome do item:</label>
            <div class="input-group mb-6">
              <input type="text" class="form-control" id="txtNomeItem" name="txtNomeItem" placeholder="Digite aqui o nome do item...">
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
                <option value="UN">UN - Unidade</option>
                <option value="KG">KG - Quilograma</option>
                <option value="SA">SA - Sacos</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <label for="slSituacao" class="form-label">Situação do item:</label>
            <div class="input-group mb-6">
              <select class="form-select" name="slSituacao" id="slSituacao">
                <option value="" selected disabled hidden>Selecione a situação para o item...</option>
                <option value="1">1 - Ativo</option>
                <option value="2">2 - Parcialmente Obsoleto</option>
                <option value="3">3 - Obsoleto</option>
              </select>
            </div>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-6">
            <label for="slFamilia" class="form-label">Familia:</label>
            <div class="input-group mb-6">
              <select class="form-select" name="slFamilia" id="slFamilia">
                <option value="" selected disabled hidden>Selecione a família do item...</option>
                <option value="NTE">NTE - Material de Escritório</option>
                <option value="NTI">NTI - Material de Informática</option>
                <option value="ACA">ACA - Produto Acabado</option>
                <option value="MTP">MTP - Matéria Prima</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <label for="dtImplantacao" class="form-label">Data de Implantação:</label>
            <div class="input-group mb-3">
              <input type="date" class="form-control" id="dtImplantacao" name="dtImplantacao">
            </div>
          </div>
          <div class="col-md-3">
            <label for="dtLiberacao" class="form-label">Data de Liberação:</label>
            <div class="input-group mb-3">
              <input type="date" class="form-control" id="dtLiberacao" name="dtLiberacao">
            </div>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-6">
            <label for="txtDescricaoItem" class="form-label">Descrição do item:</label>
            <div class="input-group mb-6">
              <textarea type="text" class="form-control" id="txtDescricaoItem" name="txtDescricaoItem" placeholder="Digite aqui uma breve descrição do seu item..." maxlength="250"></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <label for="txtInformacoesComplementares" class="form-label">Informações complementares:</label>
            <div class="input-group mb-6">
              <textarea type="text" class="form-control" id="txtInformacoesComplementares" name="txtInformacoesComplementares" placeholder="Digite aqui informações complementares do seu item..." maxlength="250"></textarea>
            </div>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-6">
            <label for="txtEstabelecimento" class="form-label">Estabelecimento</label>
            <div class="input-group mb-6">
              <input type="text" class="form-control" id="txtEstabelecimento" name="txtEstabelecimento" placeholder="Digite aqui o nome do estabelecimento...">
            </div>
          </div>
          <div class="col-md-6">
            <label for="txtDescricaoEstabelecimento" class="form-label">Informações complementares:</label>
            <div class="input-group mb-6">
              <textarea type="text" class="form-control" id="txtDescricaoEstabelecimento" name="txtDescricaoEstabelecimento" placeholder="Digite aqui a descrição do estabelecimento..." maxlength="250"></textarea>
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