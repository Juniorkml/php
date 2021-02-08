<?php
//autoload nativo
function __autoload($class_name) {
    include $class_name . '.php';
}

$usuario = new Usuario();

//teste do sucesso
$usuario->preencherDados("Junior", "(51) 989891212", 1);
$usuario->cadastrar();

echo "Nome: " . $usuario->getNome()."<br>";
echo "Telefone: " . $usuario->getTelefone()."<br>";
echo "Nível permissão: " . $usuario->getNivel()."<br>";
echo "Data do cadastro: " . $usuario->getDataCadastro();

//teste com erro de tipo, validação ao cadastrar
//$usuario2 = new Usuario();
//$usuario2->preencherDados("Junior", 12121, 1);
//$usuario2->preencherDados(11011, "12121", 1);
//$usuario2->preencherDados("Junior", 12121, "1");
//$usuario2->cadastrar();