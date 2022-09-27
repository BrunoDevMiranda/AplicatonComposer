<?php

namespace Aplication\Academia;

    class Resultado
    {
        public $aluno, $professor, $treino;

        public function cadastro(Treino $treino, Aluno $aluno, Professor $professor){

            $this->treino = $treino;
            $this->aluno = $aluno;
            $this->professor = $professor;
        }

        public function printTela()
        {
            $ref = $this->aluno->printTela();
            $ref.= '<hr><br>';
            $ref.= $this->professor->printTela();
            $ref.= '<hr><br>';
            $ref.= $this->treino->printTela();
            $ref.= '<hr><br>';

            return $ref;
        }



}