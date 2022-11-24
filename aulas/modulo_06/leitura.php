<?php

echo "1. Digite o seu nome: ";
//Armazenando na variável $entrada o valor digitado pelo usuário
//Utilizamos o trim() para remover os espaços vazios antes e depois do valor 'capturado'
//utilizamos o fgets() para receber o conteúdo escrito de algum lugar
//utilizamos o STDIN para informar que a fonte do conteúdo será fornecida pelo usuário
$nome = trim(fgets(STDIN));

echo "\n";
echo "2. Digite a sua idade: ";
//neste caso utilizamos o intval() para converter o valor recebido em um número inteiro
//isto é útil quando se é preciso fazer alguma ação que exija um formato específico do valor recebido
$idade = intval(fgets(STDIN));

echo "\n";
echo "3. Digite a sua altura: ";
//neste caso utilizamos o doubleval() para converter o valor recebido em um número fracionado (com casas decimais)
$altura = doubleval(fgets(STDIN));

echo "\n";
echo "4. Você é brasileiro? (s ou n): ";
//Aqui nós testamos se o valor que o usuário digitou é s. Caso seja qualquer outra coisa diferente de s, a variável $brasileiro receberá true
//Lembrando que true e 1, no quesito "boolean" significam a mesma coisa.
$brasileiro = trim(fgets(STDIN)) == "s";

echo "\n---------------------------------\n";
echo "::Resultado::";
echo "\n---------------------------------\n\n";
echo "Nome: $nome\n";
echo "Idade: $idade\n";
echo "Altura: $altura\n";
//Aqui fazemos um teste lógico que verifica se o valor da variável $brasileiro é verdadeiro ou falso.
//Caso seja verdadeiro, escrevemos sim, caso seja falso escrevemos não
echo "Brasileiro: " . ($brasileiro ? "sim" : "não") . "\n";
echo "\n---------------------------------\n";
die;
