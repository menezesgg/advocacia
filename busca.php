<?php include_once"sessao.php";?>
<?php include_once"menu.php";?>
<!DOCTYPE html>
<html>
<head>
  <title>V&S Buscar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- antes de terminar </head> -->
<main role="main" class="container">
<img src="imgs/page1/logoResultado.png" alt="Paris" class="center">
<br><br><br>

</head>
<body>
<div class="container-fluid">
<?php
include_once("config.php");
    //Criar a conexao
$conn = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
$email = $_POST['numero'];

        $result_usuario = "SELECT * FROM usuarios WHERE email='$email' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);

        

        if($resultado_usuario){
            $row_usuario = mysqli_fetch_assoc($resultado_usuario);
            if($email === $row_usuario['email']){     
            echo "<table border=2 class=table> 
        <tr>
        <td class=text-center>Nome</td>
        <td class=text-center>CPF</td>
        <td class=text-center>RG</td>
        <td class=text-center>telefone</td>
        <td class=text-center>genero</td>
        <td class=text-center>Nascmento</td>
        <td class=text-center>Renda</td>
        <td class=text-center>cidade</td>
        <td class=text-center>estado</td>
        <td class=text-center>Setor</td>
        <td class=text-center>Protocolo</td>
        </tr>
";
            echo 
            "<tr> 
            <td>{$row_usuario['nome']}</td>
            <td>{$row_usuario['cpf']}</td>
            <td>{$row_usuario['rg']}</td>
            <td>{$row_usuario['telefone']}</td>
            <td>{$row_usuario['sexo']}</td>
            <td>{$row_usuario['data_nasc']}</td>
            <td>{$row_usuario['renda']}</td>
            <td>{$row_usuario['cidade']}</td>
            <td>{$row_usuario['estado']}</td>
            <td>{$row_usuario['endereco']}</td>
            <td>{$row_usuario['id']}</td>
            </tr>";        

            }
            else{
           echo 'Nenhum cadastro foi encontrado com o E-mail: ','<b>'.$email.'</b>';
            }

            
            
           
            
  }
?>
<?php
    if($row_usuario['renda'] < 3300){
      echo "Aprovado: ";
    }else{
        echo "Reprovado: ";
    }


    
?>


<br>
</div>
</body>
</html>