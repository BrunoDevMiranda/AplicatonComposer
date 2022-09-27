<?php

namespace Aplication\Academia;

    class Professor{

        public $nome, $idade, $matricula;
        public function cadastro($nome, $idade, $matricula){

            $this -> nome = $nome;
            $this -> idade = $idade;
            $this -> matricula = $matricula;


        }

        public function printTela(){

            $ref = '<b>Nome Professor:</b>' . $this->nome . "<br>";
            $ref.= '<b>Idade:</b>' . $this->idade . "<br>";
            $ref.= '<b>Matricula:</b>' . $this->matricula . "<br>";


            return $ref;
        }

}




