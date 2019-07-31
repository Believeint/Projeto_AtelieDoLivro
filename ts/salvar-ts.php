<?php

$nome                = @$_REQUEST["nome_ts"];
$tipo_doc            = @$_REQUEST["tipo_documento_ts"];
$doc                 = @$_REQUEST["documento_ts"];
$insc_estadual       = @$_REQUEST["inscricao_estadual_ts"];
$email               = @$_REQUEST["email_ts"];
$logradouro          = @$_REQUEST["logradouro_ts"];
$n                   = @$_REQUEST["n_ts"];
$pais                = @$_REQUEST["pais_ts"];
$complemento         = @$_REQUEST["complemento_ts"];
$uf                  = @$_REQUEST["uf_ts"];
$bairro              = @$_REQUEST["bairro_ts"];
$municipio           = @$_REQUEST["municipio_ts"];
$cep                 = @$_REQUEST["cep_ts"];
$telefone            = @$_REQUEST["telefone_ts"];

switch ($_REQUEST['acao']) {

    case 'cadastrar':
        $sql = "INSERT INTO tbl_tomador_servico (nome_ts, tipo_documento_ts, documento_ts, inscricao_estadual_ts, email_ts, 
        logradouro_ts, n_ts, pais_ts, complemento_ts, uf_ts, bairro_ts, municipio_ts, cep_ts, telefone_ts) 
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
    $sql = "UPDATE tbl_tomador_servico SET nome_ts = '{$nome}', tipo_documento_ts = '{$tipo_doc}', documento_ts = '{$doc}',
            inscricao_estadual_ts = '{$insc_estadual}', email_ts = '{$email}', logradouro_ts = '{$logradouro}', n_ts = '{$n}',
            pais_ts = '{$pais}', complemento_ts = '{$complemento}', uf_ts = '{$uf}', bairro_ts = '{$bairro}', municipio_ts = '{$municipio}', 
            cep_ts = '{$cep}', telefone_ts = '{$telefone}'";

    $res = $conn->query($sql) or die($conn->error);

    if($res == true) {
        print "<script>alert('Atualizado com sucesso!');</script>";
        print "<script>location.href='index.php?page=lis-ts';</script>";
    } else {
        print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
    } 
    break;

    case 'excluir':

    $sql = "DELETE FROM tbl_tomador_servico WHERE id_ts=" . $_REQUEST['id_ts'];

    $res = $conn->query($sql) or die($conn->error);

    if($res == true) {
        print "<script>alert('Excluiu com sucesso!');</script>";
        print "<script>location.href='index.php?page=lis-ts';</script>";
    } else {
        print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
    }

    break;
    
}