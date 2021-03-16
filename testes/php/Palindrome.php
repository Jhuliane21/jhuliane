<?php

/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*
Um palíndromo é uma palavra que pode ser lida  da mesma maneira da esquerda para direita, como ao contrário.
Exemplo: ASA.

Faça uma função que ao receber um input de uma palavra, string, verifica se é um palíndromo retornando verdadeiro ou falso.
O fato de um caracter ser maiúsculo ou mínusculo não deverá influenciar no resultado da função.

Exemplo: isPalindrome("Asa") deve retonar true.
*/




class Palindrome
{
    public static function isPalindrome($word)
    {
        $invertido = "";
        for (var j=word.length-1; j>=0; j--){
            invertido.concat(word.charAt(j));
        }
        $word = strtolower($word);
        $invertido = strtolower($invertido);
        if($word == $invertido){
            return true;
        }else{
            return false;
        }
    }
}

echo Palindrome::isPalindrome('Deleveled');