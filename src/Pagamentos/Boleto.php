<?php

namespace Aplication\Pagamentos;

    class Boleto
    {
        public $matricula, $plano;
        public function cadastro($matricula, $plano){

            $this -> matricula = $matricula;
            $this -> plano = $plano;



        }
        public function printTela(){

            $ref = '<b> Matricula </b> :' . $this->matricula . "<br>";
            $ref.= '<b> Plano Mensal</b> :' . $this->plano . "<br>";

            return $ref;
        }


}