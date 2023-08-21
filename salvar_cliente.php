<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome_cli = $_POST["nome_cli"];
            $nasc_cli = $_POST["nasc_cli"];
            $cpf_cli = $_POST["cpf_cli"];

            $sql = "INSERT INTO cliente (nome_cli,nasc_cli,cpf_cli) VALUES ('{$nome_cli}','{$nasc_cli}','{$cpf_cli}')";
            $res = $conn->query($sql);

            //if($res==true){
                // print "<script>alert('Cadastrado com sucesso');<\script>";
                // print "<script>location.href='?page=listar';<\script>";
            // }else{
            //     print "<script>alert('Não foi possível cadastrar');<\script>";
            //     print "<script>location.href='?page=listar';<\script>";
            // }
            break;
        case 'alterar':
            $nome_cli = $_POST["nome_cli"];
            $nasc_cli = $_POST["nasc_cli"];
            $cpf_cli = $_POST["cpf_cli"];

            $sql = "UPDATE cliente SET nome_cli='{$nome_cli}',nasc_cli='{$nasc_cli}',cpf_cli='{$cpf_cli}' WHERE id_cli=".$_REQUEST["id_cli"];
            $res = $conn->query($sql);

            // if($res==true){
            //     print "<script>alert('Alterado com sucesso');<\script>";
            //     print "<script>location.href='?page=listar';<\script>";
            // }else{
            //     print "<script>alert('Não foi possível Alterar cliente');<\script>";
            //     print "<script>location.href='?page=listar';<\script>";
            // }            
            break;
        case 'excluir':
            $sql = "DELETE FROM cliente WHERE id_cli=".$_REQUEST["id_cli"];
            $res = $conn->query($sql);

            // if($res==true){
            //     print "<script>alert('Excluído com sucesso');<\script>";
            //     print "<script>location.href='?page=listar';<\script>";
            // }else{
            //     print "<script>alert('Não foi possível Excluir cliente');<\script>";
            //     print "<script>location.href='?page=listar';<\script>";
            // } 
            break;
    }