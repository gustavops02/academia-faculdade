<?php

function cleanInput($string)
{
    //str_replace substitui um carácter por outro, nesse caso espaço por nada
    $string = str_replace(' ', '', $string);
    $string = trim($string);

    //Nessa linha o traço
    $string = str_replace('-', '', $string);
    //A abertura de parenteses
    $string = str_replace('(', '', $string);
    //O fechamento de parenteses
    $string = str_replace(')', '', $string);
    //O ponto
    $string = str_replace('.', '', $string);
    //No fim é retornado a variável com todas as alterações
    return $string;
}

function cleanAlturaEPeso($string) {
    $string = str_replace(',', '.', $string);
    return $string;
}
