<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $sql = " INSERT INTO usuario (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('cadastro com sucesso')</script";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('erro')</script";
                print "<script>location.href='?page=listar';</script>";
            }
        break;
        case 'editar':
        break;
        case 'excluir':
        break;
        
    }