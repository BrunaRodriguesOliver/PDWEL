<?php

$numerosRequisitaramFatorial = array();
$numerosPrimos = array();
$numerosPerfeitos = array();

echo"<h3>Uma função para calcular o fatorial usando while</h3>";
function fatorial($_numero)
{
    $fatorial = 1;
    $contador = 1;

    while ($contador <= $_numero) {
        $fatorial *= $contador;
        $contador++;
    }
    echo "<p>Resultado fatorial de $_numero: $fatorial</p>";

    return $_numero;
}

array_push($numerosRequisitaramFatorial, fatorial(3));
array_push($numerosRequisitaramFatorial, fatorial(4));
array_push($numerosRequisitaramFatorial, fatorial(5));


echo "<h3>-Uma função para retornar se um numero é primo ou composto usando do...while</h3>";

function numeroPrimoOuComposto($numero)
{
    $ePrimo = true;
    $contador = 2;
    do {

        if ($numero == 2) break;

        if ($numero % $contador == 0) {
            $ePrimo = false;
        }

        $contador++;
    } while ($contador < $numero);

    echo "<b>Número $numero</b>";

    echo $ePrimo ? "<p>é primo</p>" : "<p>é composto</p>";

    return $ePrimo;
}

numeroPrimoOuComposto(2) ? array_push($numerosPrimos, 3) : null;
numeroPrimoOuComposto(5) ? array_push($numerosPrimos, 5) : null;
numeroPrimoOuComposto(7) ? array_push($numerosPrimos, 7) : null;
numeroPrimoOuComposto(12) ? array_push($numerosPrimos, 12) : null;

 
echo "<h3>Uma função para retornar se um numero é perfeito</h3>";

function eNumeroPerfeito($numero)
{
    $soma = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    $ePerfeito = $soma == $numero;

    echo $ePerfeito == $numero ? "<p> $numero é um número perfeito</p>" : "<p> $numero não é um número perfeito</p>";
    return $ePerfeito;
}

eNumeroPerfeito(6) ? array_push($numerosPerfeitos, 6) : null;
eNumeroPerfeito(9) ? array_push($numerosPerfeitos, 9) : null;

echo "<h3>Armazene em um vetor os primeiros n fatoriais dado que n é o parâmetro da função fatorial.</h3>";
echo "<p>Números que chamaram a função fatorial: </p>";
print_r($numerosRequisitaramFatorial);

echo "<h3>Armazene em um vetor os primeiros n primo dado. Exiba no cliente os elementos do vetor.</h3>";
echo "<p>Números primos encontrados: </p>";
print_r($numerosPrimos);

echo"<h3>Armazene em um vetor os primeiros n perfeitos encontrados. Exiba no cliente os elementos do vetor</h3>";
echo "<p>Números perfeitos: </p>";
print_r($numerosPerfeitos);

?>