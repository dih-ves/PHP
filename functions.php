<?php

//Exemplo geral de como construir uma função

<script
function nomedafuncao() 
  {
    //código a ser executado
  }

//////////////////////////////////////////////////////
// Função abaixo diz oi 
function dizOi()
{
echo "Oi!"
}
 
//chamando a função
dizOi();


//////////////////////////////////////////////////////
//Parametros de uma função

function multiplica_por_dois($numero)
{
$resposta = $numero * 2
  echo $resposta
}

//Invocando a função multiplica_por_dois , sendo o número a ser mutiplicado "8"
multiplica_por_dois($8);

//Função que multiplica um número pelo outro

function multiplica($numero1, $numero2)
{
echo $numero1 * $numero2
}

//invocando a função multiplica sendo os numeros a serem multiplicados 3 e 9.

multiplica(3,9);

//////////////////////////////////////////////////////

// argumentos default de uma função
function setCounter($numero=10)
{
echo "setCounter é:" .$numero;
}

//como invocar a função no modo default
setCounter(42); //setCounter is 42
setCounter(); // setCounter is 10

//////////////////////////////////////////////////////

//Usando return

function mult($num1, $num2)
{
$resposta = $num1 * $num2;
  return $resposta
}

//invocando a função mult
echo mult(8,3); // Output 24

//////////////////////////////////////////////////////










?>
