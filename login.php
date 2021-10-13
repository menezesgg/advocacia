<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Advocacia e Consultoria</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
      </li>
        <li class="nav-item">
          <a class="nav-link" href="formulario.php">Cadasre-se</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quemSomos.php">Quem Somos</a>
        </li>    
    </li>
    <li class="nav-item">
      <a class="nav-link" href="legislacao.php">Legislação</a>
    </li>  
</li>
<li class="nav-item">
  <a class="nav-link" href="contato.php">Contate-nos</a>
</li>   
      </ul>
    </div>  
  </nav>
          
        </ul>
       
      </div>
    </nav>
    <br>
    <main role="main" class="container">
        <img src="imgs/page1/logoEntrar.png" alt="Paris" class="center">
     
      <div class="starter-template" id="template">
      <br>

        <h2> Entrar na conta existente:</h2>
        <br>

       <div>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="E-mail">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
    </div>
<br><br>
    <h4>Criar uma nova conta. É rápido e fácil.</h4>
    <a href="formulario.php">Cadastre-se</a>



        <br><br>

        <strong>
            <div id="passos">
                <p>Como acompanhar seu processo em 3 passos:</p>
            <img alt="" src="imgs/page1/Codigo.png" style="width: 100px; height: 100px;"/>
            <img alt="" src="imgs/page1/Pesquisar.png" style="width: 100px; height: 100px;"/>
            <img alt="" src="imgs/page1/Entrega.png" style="width: 100px; height: 100px;"/>
        </strong>
        <br><br>

    </p>
    <a href="index.php">Página Inicial</a>
    <br><br>
    <div id="footer">
        <p>Vasconcelos e Spindola Advocacia & Consultoria © - Todos os Direitos Reservados.</p>
        <br>
    </body>
</html>