<?php

namespace Aplication\Academia;

    class Treino{

        public $nomeExcercicio, $aparelho, $numeroRepeticoes,$carga;
        public function cadastro($nomeExercicio, $aparelho, $numeroRepeticoes, $carga){

            $this -> nomeExcercicio = $nomeExercicio;
            $this -> aparelho = $aparelho;
            $this -> numeroRepeticoes = $numeroRepeticoes;
            $this -> carga = $carga;


        }

        public function printTela(){

            $ref = '<b>Nome do Exercicio :</b>' . $this->nomeExcercicio . "<br>";
            $ref.= '<b>Aparelho: </b>' . $this->aparelho . "<br>";
            $ref.= '<b>Repetições: </b>' . $this->numeroRepeticoes . "<br>";
            $ref.= '<b>Carga: </b>' .$this->carga . "<br>";


            return $ref;
        }

}


