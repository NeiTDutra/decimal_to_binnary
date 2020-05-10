<?php

/* 
	Função que recebe um número decimal e calcula seu equivalente em binário
	Autor: Nei Thomassin Dutra <nei.thomass@gmail.com>
*/
    
    function deci_bin($decimal){
        // Variável array que recebe o resto da divisão
	    $resto = array();
	    // Variável que contêm o contador
	    $cont = 0;
	    // Se o número decimal for zero retorna zero...
	    if($decimal == 0){
	        return 0;
	    }
	    // Senão, enquanto o número decimal for maior ou igual a um...
	    else{
	        while($decimal >= 1){
	            // Arranja o resto da divisão por dois em um array de acordo com o índice...
	            $resto[$cont] = $decimal % 2;
	            // Calcula o valor decimal da divisão por dois...
	            $decimal = $decimal / 2;
	            // Incrementa o contador...
	            $cont += 1;
		        
	        }
	        // Inverte o array resultante para a ordem do valor binário...
	        $bin = array_reverse($resto);
	        // Transforma o array em string e retorna o resultado...
	        $str = implode('', $bin);
            return $str;
        }  
    }
    // Chama a função com o valor a ser convertido como parâmetro
    //<function>deci_bin(<int>125);
