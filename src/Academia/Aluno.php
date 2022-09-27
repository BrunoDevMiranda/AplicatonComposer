<?php

namespace Aplication\Academia;

    class Aluno{

        public $nome, $idade, $altura, $peso;
        public function cadastro($nome, $idade, $altura, $peso){

            $this -> nome = $nome;
            $this -> idade = $idade;
            $this -> altura = $altura;
            $this -> peso = $peso;


        }

        public function printTela(){

            $ref = '<b> Nome Aluno</b> :' . $this->nome . "<br>";
            $ref.= '<b> Idade</b> :' . $this->idade . "<br>";
            $ref.= '<b> Altura</b> :' . $this->altura . "<br>";
            $ref.= '<b>Peso</b> :' . $this->peso . "<br>";
            return $ref;
        }

}

