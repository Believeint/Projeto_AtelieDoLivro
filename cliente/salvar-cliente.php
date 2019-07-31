<?php

$nome                = @$_REQUEST["nome_cli"];
$tipo_doc            = @$_REQUEST["tipo_documento_cli"];
$doc                 = @$_REQUEST["documento_cli"];
$insc_estadual       = @$_REQUEST["inscricao_estadual_cli"];
$email               = @$_REQUEST["email_cli"];
$logradouro          = @$_REQUEST["logradouro_cli"];
$n                   = @$_REQUEST["n_cli"];
$pais                = @$_REQUEST["pais_cli"];
$complemento         = @$_REQUEST["complemento_cli"];
$uf                  = @$_REQUEST["uf_cli"];
$bairro              = @$_REQUEST["bairro_cli"];
$municipio           = @$_REQUEST["municipio_cli"];
$cep                 = @$_REQUEST["cep_cli"];
$telefone            = @$_REQUEST["telefone_cli"];

switch ($_REQUEST['acao']) {

    case 'cadastrar':
        $sql = "INSERT INTO tbl_cliente (nome_cli, tipo_documento_cli, documento_cli, inscricao_estadual_cli, email_cli, 
        logradouro_cli, n_cli, pais_cli, complemento_cli, uf_cli, bairro_cli, municipio_cli, cep_cli, telefone_cli) 
        VALUES ('{$nome}', '{$tipo_doc}', '{$doc}', '{$insc_estadual}', '{$email}', '{$logradouro}', '{$n}', '{$pais}', 
        '{$complemento}', '{$uf}', '{$bairro}', '{$municipio}', '{$cep}', '{$telefone}')";

        $res = $conn->query($sql) or die($conn->error);

        if($res == true) {
            print "<br><div class='alert alert-success text-center'>Cadastrou com sucesso!</div>";
        }else {
            print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
        }
        
    break;

    case 'editar':
    $sql = "UPDATE tbl_cliente SET nome_cli = '{$nome}', tipo_documento_cli = '{$tipo_doc}', documento_cli = '{$doc}',
            inscricao_estadual_cli = '{$insc_estadual}', email_cli = '{$email}', logradouro_cli = '{$logradouro}', n_cli = '{$n}',
            pais_cli = '{$pais}', complemento_cli = '{$complemento}', uf_cli = '{$uf}', bairro_cli = '{$bairro}', municipio_cli = '{$municipio}', 
            cep_cli = '{$cep}', telefone_cli = '{$telefone}'";

    $res = $conn->query($sql) or die($conn->error);

    if($res == true) {
        print "<script>alert('Atualizado com sucesso!');</script>";
        print "<script>location.href='index.php?page=lis-cliente';</script>";
    } else {
        print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
    } 
    break;

    case 'excluir':

    $sql = "DELETE FROM tbl_cliente WHERE id_cli=" . $_REQUEST['id_cli'];

    $res = $conn->query($sql) or die($conn->error);

    if($res == true) {
        print "<script>alert('Excluiu com sucesso!');</script>";
        print "<script>location.href='index.php?page=lis-cliente';</script>";
    } else {
        print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
    }

    break;
    
}