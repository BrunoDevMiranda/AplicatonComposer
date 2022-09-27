<?php





require_once 'vendor/autoload.php';


$aluno = new Aplication\Academia\Aluno();
$aluno->cadastro("Bruno",35,"1.80",75);

$professor = new \Aplication\Academia\Professor();
$professor->cadastro("Jiraya",78,1001);

$treino = new \Aplication\Academia\Treino();
$treino->cadastro("Tricps","Barra curta","Três de 10","18kg");

$pagamento = new \Aplication\Pagamentos\Boleto();
$pagamento->cadastro(211258,"R$ 69.90");


$result = new \Aplication\Academia\Resultado();
$result->cadastro($treino,$aluno,$professor);

echo $result->printTela();
echo $pagamento->printTela();