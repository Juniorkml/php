a)

<?php 

$variavel = 198;

if (isset($variavel) && is_numeric($variavel)){
	echo $variavel;
};

b)

<?php 


$variavel = ["nome" => "Pedro Luiz", "endereco" => "Av Taquara", "telefone" => "(51) 5151-51511"];


if (isset($variavel) && is_array($variavel)) {
	
	if( array_key_exists("endereco", $variavel) && is_string($variavel["endereco"])) {
	
		echo $variavel["endereco"];
		
	}
	
}

c)

<?php 

$variavel = "Romarinho";

if (isset($variavel) && is_string($variavel)) {
	
	echo $variavel;
	
}
