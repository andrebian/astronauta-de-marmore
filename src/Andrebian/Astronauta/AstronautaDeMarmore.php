<?php

namespace Andrebian\Astronauta;

class AstronautaDeMarmore
{
    
    private static $letra = [
        'A lua inteira agora é um manto negro-o',
        'O fim das vozes no meu rádio-o',
        'São quatro ciclos no escuro vazio do céu',
        'Quero um machado pra quebrar o gelo-o',
        'Quero acordar do sonho agora mesmo-o',
        'Quer uma chance de tentar viver sem dor',
        'Sempre está lá e ver ele voltar, não era mais o mesmo mas estava em seu lugar',
        'O tolo teme a noite como a noite vai temer o fogo',
        'Vou chorar sem medo, vou lembrar do tempo de onde eu via o mundo azul',
        'A trajetória escapa o risco nú uhu',
        'As nuvens queimam céu nariz azul uhu',
        'Desculpe estranho, eu voltei mais puro que o céu',
        'Na lua ao lado o escuro é sempre igual',
        'No espaço a solidão é tão normal'
    ];
    
    
    public static function randomize()
    {
        $min = 0;
        $max = count(self::$letra);
        $random = rand($min, $max);
        
        $frase = self::$letra[$random] . ' - Astronauta de mármore - Nenhum de Nós';
        
        return $frase;
    }
    
}