<?php

// A diferença entre include e require é a forma como um erro é tratado. 
//require produz um erro E_COMPILE_ERROR , o que encerra a execução do script.
// O include apenas produz um warning que pode ser "abafado" com
//@ . include_once tem a garantia que o arquivo não será incluído
//novamente se ele já foi incluído antes.

require ("./alunos.php");

// importar o arquivo de funções (cria-lo)

require ("./funcoes.php");

//chamar a função notas, e pronto

situacaoNotaAluno($alunos);

// pintar a célula do aluno aprovado de verde,
//reprovado de vermelho

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Notas dos alunos</title>
</head>
<body>
    <section>
        <h1>Tabela de notas</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Nota</th>
                <th>Situação</th>
            </tr>

            <?php
            foreach($alunos as $alunos){
            ?>
            <tr>
                <td>
                    <?= $alunos ["nome"]; ?>
                </td>
                <td>
                    <?= $alunos ["idade"]; ?>
                </td>
                <td>
                    <?= $alunos ["nota"]; ?>
                </td>
                <td>
                    <?= 
                    isset($alunos["situacao"]) ? 
                        $alunos["situacao"] : 
                        ""
                    ?> 
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </section>
</body>
</html>