<?php
    # incluindo arquivo de conexao
    include 'conexao.php';
    
    include 'form_bens_1_docente';
    include 'form_bens_1_tae';
    include 'adiciona_objeto';

    # recebendo dados do formulario
    $item = $_POST['item'];
    $estrategia = $_POST['estrategia'];
    $especificacoes = $_POST['especificacoes'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    # verificando se variaveis estao vazias
    if (isset($item) 
        AND isset($estrategia) 
        AND isset($especificacoes) 
        AND isset($preco)) 
    {

        // echo $item;
        // echo $estrategia;
        // echo $especificacoes;
        // echo $preco;
        // echo $quantidade;

        # montando consulta SQL - ADICIONANDO OBJETO
        $sql = "
            SELECT id_objeto 
            FROM objeto 
            WHERE nome_objeto='caneta' AND especificacoestecnicas_objeto='canetas esferografica' AND estrategiafornecimento_objeto='licitaçao' AND preco_objeto='0,50' ORDER BY `objeto`.`id_objeto` limit 1";

        // INSERT INTO objeto(nome_objeto, especificacoestecnicas_objeto, estrategiafornecimento_objeto, preco_objeto, id_grupo)
        //         -- VALUES('$item', '$especificacoes', '$estrategia', '$preco', 1)";

        // echo $sql;

        // preparando variavel
        // $valor = mysqli_query($con, $sql);

        // if($valor)
        // {
        //     // echo "teste 1";
        // }
        // else
        // {
        //     echo "Erro";
        // }            

        // echo $valor;

        // preparando variavel
        $result = mysqli_query($con, $sql);

        // capturando valor funcao usuario
        while($res = mysqli_fetch_assoc($result))
        {
            $teste = $res['id_objeto'];
        }

        echo $teste;

        // while($res = mysqli_fetch_assoc($valor))
        // {
        //     $teste = $res['id_objeto'];
        // }        

        // realizando inserção da tabela objeto
        // if(mysqli_query($con, $sql))
        // if (!isset($valor)
        // {
        //     // echo "funcionou!";

        //     echo ("<script>alert('Objeto adicionado com sucesso!'); location.href='';</script>");

        //     // echo "funcionou";

        //     // SEGUNDA INSERÇAO - ADICIONANDO AVALIACOES
        //     // $sql = "INSERT INTO avaliacao_dad(recursos_avaliacaodad, comentarios_avaliacaodad, valorestimadodespesa_avaliacaodad, id_status, id_tipodespesa)    
        //     //         VALUES("", "", 0, 1, 1)";

        //     // // realizando inserção na tabela - avaliacao dad 
        //     // if(mysqli_query($con, $sql))
        //     // {   
        //     //     echo "teste";
        //     // }
        // }
        // else
        // {
        //     echo ("<script>alert('ERRO!'); location.href='';</script>");
        // }
    }    
?>
