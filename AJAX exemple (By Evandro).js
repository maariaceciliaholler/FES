/*

basta colocar esta funcao no arquivo javascript do seu site
o primeiro parametro da funcao sendToPHP_AJAX representa o nome do POST que será enviado para o php
e o sengundo paramentro representa o valor que este post terá ex:

sendToPHP_AJAX('teste','123'); ----> o que o php recebe : ---->  $_POST['teste'] = 123;


Nota: nao é possivel chamar funcoes especificas do PHP com AJAX, que dá pra fazer é no aquivo PHP colocar 
um IF que chamará a funcao desejada, vamos supor que eu queira que o AJAX chame o php execute 
a funcao 'somar($variavel)', e esta funcao do PHP retorne para o javascript o valor da soma de uma variavel especificada + 2:


>no javascript:

<script>
	sendToPHP_AJAX('valor1','5');
</script>


>no PHP:

<?php
	if(!empty($_POST['valor1'])){
		somar($_POST['valor1']);
	}

	function somar($variavel){
		echo $variavel + 2;
	}
?>


//note, tudo que o php der echo será retornado na funcao 'phpResponse_AJAX' do javascript, atente-se 
para dar ECHO apenas no valor que deseja que o php retorne.

<




*/


function sendToPHP_AJAX(name,value){
	let path = 'caminho/do_seu/aquivo.php'; //arquivo php que ele irá fazer a requisição ajax.
	let AJAX = new XMLHttpRequest();
	AJAX.onreadystatechange = function(){
								if (this.readyState == 4 && this.status == 200){
									phpResponse_AJAX(this.responseText); //função que ele chamará quando o php retornar um valor.
								}
							};
	AJAX.open("POST", path, true);
	AJAX.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	AJAX.send(name+'='+value);
}

function phpResponse_AJAX(returnedData){
	//returnedData é o retorno d php, ou seja, tudo que o php der "ECHO" retornará nesta variavel.
	alert(returnedData);
}