<!DOCTYPE html>
<html lang="en">

<head>
  <title>Alterar Senha</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../media/styles/style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

  <div class="msg">
    <?php /*
    if (!empty($_GET)) {
      $msg = $_GET['msg'];
      $id = $_GET['id'];
      switch ($id) {
        case 0:
          echo "<div class=\"alert alert-info\" role=\"alert\">$msg</div>";
          break;
        case 1:
          echo "<div class=\"alert alert-danger\" role=\"alert\">$msg</div>";
          break;
        case 2:
          echo "<div class=\"alert alert-success\" role=\"alert\">$msg</div>";
          break;
      }
    }*/
    ?>
  </div>
  <br>
  <div id="container">
    <ul class="nav nav-tabs navegacao" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="false">Cadastro</a>
      </li>
    </ul>

    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
        <ul></ul>
        <form action="#" name="" method="post">
          <table style="width: 400px; margin: 0 auto;">
            <tr>
              <th>Nome de usuário:</th>
              <td><input name="username" id="username" type="text" size="20" /></td>
            </tr>
              <th>Senha:</th>
              <td><input name="newPasswordConf" id="newPasswordConf" size="20" type="password" /></td>
            </tr>
            <tr>
              <td colspan="2" id="botao">
                <button type="submit" class="btn btn-primary" id="botao" data-toggle="modal" data-target="#exampleModalCenter">Login</button>
          </table>
        </form>
        <br>

      </div>
      <div class="tab-pane fade" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">
        <ul></ul>
        <form action="#" name="#" method="post">
          <table style="width: 400px; margin: 0 auto;">
            <tr>
              <th>E-mail:</th>
              <td><input name="username" id="username" type="email" size="20" autocomplete="off" /></td>
            </tr>
            <tr>
              <th>Senha:</th>
              <td><input name="newPasswordConf" id="newPasswordConf" size="20" type="password" /></td>
            </tr>
            <tr>
              <th>Confirme a senha:</th>
              <td><input name="newPasswordConf" id="newPasswordConf" size="20" type="password" /></td>
            </tr>
            <tr>
              <td colspan="2" id="botao">
                <button type="submit" class="btn btn-primary" id="botao" data-toggle="modal" data-target="#exampleModalCenter">Cadastrar</button>
          </table>
        </form>
        <br>
      </div>
    </div>
  </div>
</body>

</html>