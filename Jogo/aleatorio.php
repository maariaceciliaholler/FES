<!DOCTYPE html>
<html lang="pt-br">
<?php
include 'ArrayJogoAleatorio.php'
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
    <!-- Favicon  -->
    <link rel="icon" href="../images/LogoSite.png">
    <style>
       img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        #headerPopup{
        width:75%;
        margin:0 auto;
        }

        #headerPopup iframe{
        width:100%;
        margin:0 auto;
        }
    </style>
   
    <title>BRAILLANDO</title>

</head>
<body class="header">
<nav class="navbar navbar bg" >
      <h6 style="color:#212529;">Fase Aleatório</h6>    
      <a href="../index.html" ><h6 style="color:#212529;">Página Inicial</h6></a>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col">
          <img style=" margin: 0 auto;margin-top: 5em; max-width:500px; max-height:250px; width: auto; height: auto;" src="<?php echo $mesclagem[$aleatorioAleatorio]; ?>"/>
        </div>
      <div class="col">
        <div class="card" style="width: 18rem; color: black; margin: 0 auto;margin-top: 10em;">
          <div class="card-body">
            <h5 class="card-title" style="color:#000;" >Responda</h5>
            <p class="card-text" style="color:#212529;" >Qual letra/palavra está sendo representada na imagem ao lado?</p>
             <?php 

            //verifica se a resposta está correta, e mostra mensagem em verde
            if(isset($_SESSION["novaAleatorio"]))
              if($resposta11 == $_SESSION["novaAleatorio"]){
                $_SESSION["acertos11"]++;
                echo "<b><font color=\"#00FF00\">Você acertou a questão anterior!</font></b>" ;
              }
              
              // verifica se a resposta está errada, e mostra mensagem em vermelho
              if($resposta11 != ""){
                 if($resposta11 != $_SESSION["novaAleatorio"]){
                  echo "<b><font color=\"FF#0000\">Você errou a questão anterior</font></b>" ;
                  }
              }

              $_SESSION["novaAleatorio"] = $_SESSION["correta11"];

              //verifica se já existe 5 pontos
                 if($_SESSION["acertos11"] >= 5){
                  $_SESSION["acertos11"] = 0;
                  header('Location:parabens.php');
                }
              ?>
            <form method="post" >
              <input type="text" id="resposta11" name="resposta11" >
              <input type="submit" value="enviar">
            </form>
          </div>
        </div>
      </div>
    </div>


</body>
</html>