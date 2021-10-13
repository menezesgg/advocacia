<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $nome = $_POST['cpf'];
        $email = $_POST['rg'];
        $senha = $_POST['renda'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco,cpf,rg,renda) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco''$cpf','$rg','$renda')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
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
        <li class="nav-item">
          <a class="nav-link" href="login.php">Entrar</a>
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
        <img src="imgs/page1/logoCadastro.png" alt="Paris" class="center">
        <br>
        <blockquote>
<h4 style="text-align: center;"><strong>Lista de Documentos</strong></h4>
<br>
<h4 style="text-align: center;"><span style="color: #ff0000;">Para a pessoa ser atendida pela Advocacia e Consultoria Vasconcelos e Espindola.</span></h4>
<h4 style="text-align: center;">Em princ&iacute;pio, para o atendimento, a pessoa interessada deve apresentar seus documentos pessoais:</h4>
<h4 style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; Documento de identidade (RG, Carteira Profissional ou CNH);</h4>
<h4 style="text-align: center;"><br />&nbsp;Comprovante de resid&ecirc;ncia (conta de &aacute;gua, luz, g&aacute;s, telefone, contrato de aluguel, recibo de aluguel, declara&ccedil;&atilde;o do propriet&aacute;rio para fins de comprova&ccedil;&atilde;o de resid&ecirc;ncia etc).</h4>

</blockquote>
     
      <div class="starter-template" id="template">
      <br>
    <div class="box">
        
        <form action="formulario.php" method="POST">
            <fieldset>
                
                <legend><b>Fórmulário de Cadastro</b></legend>

                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" placeholder="Nome completo" class="inputUser" required>
                    <label for="nome" class="labelInput"></label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" placeholder="CPF" class="inputUser" required>
                    <label for="cpf" class="labelInput"></label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="rg" id="rg" placeholder="Registro Geral (RG)" class="inputUser" required>
                    <label for="rg" class="labelInput"></label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" placeholder="Senha" class="inputUser" required>
                    <label for="senha" class="labelInput"></label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" placeholder="E-mail" class="inputUser" required>
                    <label for="email" class="labelInput"></label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" placeholder="Telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput"></label>
                    <br><br>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" placeholder="" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" placeholder="" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" placeholder="" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="renda" id="renda" placeholder="Renda Presumida" class="inputUser" required>
                    <label for="renda" class="labelInput"></label>
                </div>

                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" placeholder="Cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput"></label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" placeholder="Estado" class="inputUser" required>
                    <label for="estado" class="labelInput"></label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" placeholder="Endereço" class="inputUser" required>
                    <label for="endereco" class="labelInput"></label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="textarea" name="endereco" id="endereco" placeholder="Descrição e Observação**" class="inputUser" required>
                    <label for="endereco" class="labelInput"></label>
                </div>
                <br><br>

                </head>
<body>
<div id="content">

  
  
  <form method="POST" action="index.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Caregue Seus Documentos..."></textarea>
  	</div>
  	<div>
  	</div>
  </form>
</div>
</body>
                <br><br>


                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>