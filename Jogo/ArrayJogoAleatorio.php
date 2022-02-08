<?php
//Aleatório
include_once "../conf/default.inc.php";
require_once "../conf/Conexao.php";

$dadosLetras1= 0;
$linhaLetras1= 0;
//Constroi um array para fazer o sorteio da imagem das letras
$pdo = Conexao::getInstance();
$consulta = $pdo->query("SELECT imagem FROM letras");
$dadosLetras1 = array();
   while ($linhaLetras1 = $consulta->fetch(PDO::FETCH_ASSOC)) {
     $dadosLetras1[] = $linhaLetras1['imagem'];
}

//pula linha
$linhaLetras11= 0;
 //Obter valor de cada imagem das letras
$pdo = Conexao::getInstance();
$consulta = $pdo->query("SELECT valor FROM letras");
$valorLetras1 = array();
   while ($linhaLetras11 = $consulta->fetch(PDO::FETCH_ASSOC)) {
     $valorLetras1[] = $linhaLetras11['valor'];
}

// Constroi um array para fazer o sorteio da imagem das palavras
$dadosPalavra11= 0;
$linhaPalavra1= 0;
//Pesquisa
$pdo = Conexao::getInstance();
$consulta = $pdo->query("SELECT imagem FROM palavras");
$dadosPalavra11 = array();
   while ($linhaPalavra1 = $consulta->fetch(PDO::FETCH_ASSOC)) {
     $dadosPalavra11[] = $linhaPalavra1['imagem'];
}

//pula linha
$linhaPalavra11= 0;
 //Obter valor de cada imagem das Palavra
$pdo = Conexao::getInstance();
$consulta = $pdo->query("SELECT valor FROM palavras");
$valorPalavra = array();
   while ($linhaPalavra11 = $consulta->fetch(PDO::FETCH_ASSOC)) {
     $valorPalavra[] = $linhaPalavra11['valor'];
}

// mesclar as imagens
$mesclagem = array_merge($dadosLetras1,$dadosPalavra11);
$contadorAleatorio = count($mesclagem); 
$aleatorioAleatorio = rand(0,$contadorAleatorio-1);

//mesclar os valores
$mesclagemValores = array_merge($valorLetras1,$valorPalavra);

//Respostas e verificação do nível aleatório
session_start();
$resposta11=isset($_POST['resposta11'])?$_POST['resposta11']: "";
$resposta11 = strtolower($resposta11);

$_SESSION["acertos11"] = isset($_SESSION["acertos11"])?$_SESSION["acertos11"]: 0;

$_SESSION["correta11"] = $mesclagemValores[$aleatorioAleatorio];

?>