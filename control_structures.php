<?php

//Exemplo de if e Else

$x = 10;
$y = 20;
if ($x >= $y) {
   echo $x;
 } else {
   echo $y;
}

// Outputs "20"



////////////////////////////////////////////////////////////////

//exemplo de elseif

if (condition) {
  code to be executed if condition is true;
} elseif (condition) {
  code to be executed if condition is true;
} else {
   code to be executed if condition is false;
}

////////////////////////////////////////////////////////////////
//if else elseif

//código exemplo de controle de estrutura

if ($age<=13) {
   echo "Child.";
} elseif ($age>13 && $age<19) {
   echo "Teenager";
} else {
   echo "Adult";
}

//Outputs "Adult"

////////////////////////////////////////////////////////////////

//While
//Enquanto a condição for verdadeira o código continuará sendo executado

while (condition is true)
{
//code to be executed
}

//exemplo:

$i = 1;
while ($i < 7) 
{
  echo "The value is $i <br />";
  $i++;
}

//Output: The value is 1
//Output: The value is 2
//Output: The value is 3
//Output: The value is 4
//Output: The value is 5
//Output: The value is 6
//Output: The value is 7

////////////////////////////////////////////////////////////////

//realiza uma rotina enquanto a condição é verdadeira

do 
{
code to be executed
} 
while(condition is true)

//exemplo real de 'do / while '
$i = 5;
do
{
  echo "The number is" .$i ."<br/>";
  $i++;
} while ($i <=7);


//Output
//The number is 5
//The number is 6
//The number is 7

////////////////////////////////////////////////////////////////

// Looping com FOR

//estrutura do for
for (init, test, increment)
{
code to be executed
}



?>

http://httpd.apache.org/docs/2.2/pt-br/mod/mod_authn_file.html
http://httpd.apache.org/docs/2.2/pt-br/mod/mod_cgi.html
http://httpd.apache.org/docs/2.2/pt-br/howto/htaccess.html

