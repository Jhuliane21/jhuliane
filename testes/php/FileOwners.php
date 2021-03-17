<?php


/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*
Implemente uma função que ao receber um array associativo contendo arquivos e donos, retorne os arquivos agrupados por dono. 

Por exempolo, um array ["Input.txt" => "Jose", "Code.py" => "Joao", "Output.txt" => "Jose"] a função groupByOwners deveria retornar ["Jose" => ["Input.txt", "Output.txt"], "Joao" => ["Code.py"]].


*/

class FileOwners
{
    public static function groupByOwners($files)
    {
        $i = 0;
        $donos = array();
        foreach($files as $a){
            foreach($donos as $b){
                if($files[$a] == $b){
                    $i = $i + 1;
                }
            }
            if($i == 0){
                $donos.push($files[$a]);
            }
            $i = 0;
        }
        foreach($donos as $d){
            $pertences = array();
            foreach($files as $f){
                if($files[$f] == $d){
                    $pertences.push($f);
                }
            }
            $donos[$d] = $pertences;
        }
        return $donos;
    }
}

$files = array
(
    "Input.txt" => "Jose",
    "Code.py" => "Joao",
    "Output.txt" => "Jose",
    "Click.js" => "Maria",
    "Out.php" => "maria",

);
var_dump(FileOwners::groupByOwners($files));