<?php include_once"sessao.php";?>

<?php include_once"menu.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
  
    <br>
    <main role="main" class="container">
        <img src="imgs/page1/logoConsulta.png" alt="Paris" class="center">
     
      <div class="starter-template" id="template">
      <br>
        <h2> Digite no campo abaixo seu E-mail para detalhes de seu processo:</h2>
        <br>

        <div class="form-group">
            <form action="busca.php" method="POST">
            
            <input type="text" class="form-control" id="numero" aria-describedby="emailHelp" placeholder="Digite aqui seu E-mail cadastrado" name="numero" required>
          </div>   
       
          

          <button id="btn" class="btn btn-primary" onClick="javascript:close_clip()"><img src="imgs/page1/lupa.png" /></button>

        </form>


    

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
    <a href="sistema.php">Página Inicial</a>
    <br><br>
    <div id="footer">
        <p>Defensoria Pública-GO © - Todos os Direitos Reservados.</p>
        <br>
    </body>
</html>