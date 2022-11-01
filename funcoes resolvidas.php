<?php

namespace SRC; 

class Funcoes{


    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
     public function SeculoAno($ano){
        $unidade = str_split($ano, 1);
        if($unidade[2] == 0 && $unidade[3] == 0){
            $seculo = $unidade[0].$unidade[1];
        }else{
    
            $seculo = $unidade[0].$unidade[1];
            $seculo = intval($seculo) + 1;
        }
        echo "Ano ".$ano." = século ".$seculo."</br>";



//Chamada de teste da função
SeculoAno(1200);
SeculoAno(1700);

        
    }

    
	
	
	
	
	
	
	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function isPrime($number)
    {
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    
    
    function printNumber($n){
        for ($i = 0;$i <= $n; $i++){
            if (isPrime($i)){
                echo $i.' ';
            }
        }
    }
    select
printNumber (/*digite aqui o número e seus núrmeros primos anteriores serão exbidos*/);
    
  
        
    }










    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior($var) {
    $var= [/*insira aqui os valores [2,4,5] separados por vírgulas*/];
        echo max ($var);
        // acima algo bem simples , acho que nem se encaixa em multidimensional mas acho que é simples e serve bastante
        //abaixo um caso mais trabalhado


        $arrTest = array(
            array( "dia" => 1, "valor" => 707 ),//altere aqui os números dos arrays 
            array( "dia" => 2, "valor" => 430 ),//altere aqui os números dos arrays 
            array( "dia" => 3, "valor" => 224 ),//altere aqui os números dos arrays 
            array( "dia" => 4, "valor" => -333 ),//altere aqui os números dos arrays 
            array( "dia" => 5, "valor" => 417 ),//altere aqui os números dos arrays 
            array( "dia" => 6, "valor" => -52 )//altere aqui os números dos arrays 
        );
        function maxValueInArray($array, $keyToSearch)
        {
            $currentMax = NULL;
            foreach($array as $arr)
            {
                foreach($arr as $key => $value)
                {
                    if ($key == $keyToSearch && ($value >= $currentMax))
                    {
                        $currentMax = $value;
                    }
                }
            }
        
            return $currentMax;
        }
        
        //                                            array       key
        $value = maxValueInArray($arrTest, "valor");
        echo ($value);
        
  
        
    }
	
	
	
	
	
	
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    
	public function SequenciaCrescente( $array){
        foreach ($array as $key => $value){
            $possivel = true;
            $array_copy = $array;
            unset($array_copy[$key]); //aqui se remove um de cada vez um elemento do array principal, para iniciar os testes
        
            foreach($array_copy as $key => $value2){  //foreach para comparar todos os elementos da cópia, se achar algo não ordenado, 
              //significa que removendo esse elemento o array continua sem estar em ordem crescente, dando um break
              // reiniciando o processo - remover o proximo elemento da lista e fazer novamente a verificação.
              if (array_key_exists($key + 1, $array_copy)){
                if ($array_copy[$key] > $array_copy[$key + 1]){
                  $possivel = false;
                  break;
                }
              }
            }
            if ($possivel){
              return 'true';
            }
          }
          return 'false';
        }
        $array = [/*insira os numeros aqui, separados por vígulas*/];
        $resultado = SequenciaCrescente($array);
        echo $resultado;
        }
    }
}

?>
