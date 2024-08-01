<?php

    namespace App\Util;

    class ConversorUtil {

        public function __construct() {

            $this->romanos_list = [
                'I' => 1,
                'V' => 5,
                'X' => 10,
                'L' => 50,
                'C' => 100,
                'D' => 500,
                'M' => 1000,
            ];
        }

        public function romanoToArabico($numero_romano){

            $arabico = 0;
            $tamanho = strlen($numero_romano);
            $i = 0;

            while ($i < $tamanho ) {

                $formacao_algarismo = $this->romanos_list[$numero_romano[$i]];
            
                if( $i + 1 < $tamanho && $formacao_algarismo < $this->romanos_list[$numero_romano[$i + 1]]){
                    $arabico -= $formacao_algarismo;
                }else{
                    $arabico += $formacao_algarismo;
                };

                $i++;
            }

            return $arabico;
        }

        public function arabicoToRomano($numero_arabico){
            
            $romano = '';
            $romano_list_reverso = array_reverse($this->romanos_list, true);

            foreach ($romano_list_reverso as $simbolo_romano => $algarismo_arabico) {

                $divisao_arabico = $numero_arabico % $algarismo_arabico;

                while($divisao_arabico < $numero_arabico){

                    $romano .= $simbolo_romano;
                    $numero_arabico -= $algarismo_arabico;

                }
            }
            
            return $romano;
        }

        public function validate($elemento){

            $validacao_romano = preg_match('/^M{0,3}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/', $elemento);
            return $validacao_romano;
        }

    }

?>
