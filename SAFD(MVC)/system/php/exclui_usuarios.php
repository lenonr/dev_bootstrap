<?php

//incluindo arquivo conexao
include 'conexao.php';

$sql = "SELECT login_usuario, estado_usuario, nome_setor, descricao_funcao, siape_funcionario, data_cadastro
        FROM usuario, setor, funcao, funcionario
        WHERE usuario.id_setor = setor.id_setor
        AND usuario.id_funcao = funcao.id_funcao
        AND funcionario.id_funcionario = usuario.id_funcionario";

$result = mysqli_query($con, $sql);


//criando repeticao para percorrer a tabela
while ($linha = mysqli_fetch_assoc($result))
{
    #criando variavel para mostra colunas/linhas
    $visualizar = "<tr>
                        <td>" . $linha['siape_funcionario'] . "</td>" . "
                        <td>" . $linha['login_usuario'] . "</td>" . "
                        <td>" . $linha['nome_setor'] . "</td>" . "
                        <td>" . $linha['descricao_funcao'] . "</td>" . "
                        <td>" . $linha['data_cadastro'] . "</td>" . "
                        <td>" . "<button>Excluir</button>". "</td>" . "
                    </tr>";

    #mostrando colunas/linhas
    echo $visualizar;
}
?>
