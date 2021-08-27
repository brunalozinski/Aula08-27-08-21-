<?php 

function situacaoNotaAluno (array $alunos) {
    foreach ($alunos as $alunos) {
        if ($alunos["nota"] >= 50) {
            $alunos["situacao"] = "aprovado";

        } else {
            $alunos["situacao"] = "reprovado";
        }
    }
}
