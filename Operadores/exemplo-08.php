<?php

$resultado = 10 +3 /2; // A forma com que vai ser realzado o calculo é sempre em ordem de prioridade, neste casofoi realizado a divisão e depois a soma. exibindo o resultado de 11.5.

echo $resultado;

echo"<br/>";

$resultado = (10 +3)/2; //Caso queira realizar a soma primeiro do que a divisão, deve-se utilizar parenteses entre a conta, desta forma o resultado exibido será de 6.5.

echo$resultado;

echo"<br/>";

$resultado_2 = (10 + 3) / 2 > 5 && 10 + 5 < 3; // Pode-e utilizar uma verificação junto a conta que será feita. Neste caso apos valvular a soma e divisão vai haver uma comparação de que 6.5 ser maior do que 5 que é verdadeiro o simbolo dos dois && comercias siguinifica que a outra comparação tambem deve dar verdadeiro para que tudo seja verdadeiro mas não é pois 15 é maior e não menor do que 3. o && seria um (si e somente si). 

var_dump($resultado_2);

echo"<br/>";

$resultado_3 = (10 + 3) / 2 > 5 || 10 + 5 < 3; // o || siguinifica uma ou outra verdadeiro neste caso independente da segunda verificação ser falsa o resultado é verdadeiro.

var_dump($resultado_3);

?>