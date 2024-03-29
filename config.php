<?php

//CONEXAO COM O BANCO DE DADOS
$host = 'localhost';
$user = 'root';
$pass = 'adm371';
$db = 'adolivrov1';

$conn = new mysqli($host, $user, $pass, $db) or die($conn->error);

//INCLUSÃO DE PAGINAS
switch (@$_REQUEST['page']){
    //AGENDA
    case 'cad-agenda':
        include "agenda/cadastrar-agenda.php";
        break;
    case 'sal-agenda':
        include "agenda/salvar-agenda.php";
        break;
    case 'lis-agenda':
        include "agenda/listar-agenda.php";
        break;
    case 'edi-agenda':
        include "agenda/editar-agenda.php";
        break;
    //CLIENTE
    case 'cad-cliente':
        include "cliente/cadastrar-cliente.php";
        break;
    case 'sal-cliente':
        include "cliente/salvar-cliente.php";
        break;
    case 'edi-cliente':
        include "cliente/editar-cliente.php";
        break;
    case 'lis-cliente':
        include "cliente/listar-cliente.php";
        break;
    case 'exi-cliente':
        include "cliente/exibir-cliente.php";
        break;
    //TOMADOR DE SERVICO
    case 'cad-ts':
        include "ts/cadastrar-ts.php";
        break;
    case 'sal-ts':
        include "ts/salvar-ts.php";
        break;
    case 'edi-ts':
        include "ts/editar-ts.php";
        break;
    case 'lis-ts':
        include "ts/listar-ts.php";
        break;
    case 'exi-ts':
        include "ts/exibir-ts.php";
        break;
    //SERVICO

    default:
        include 'dashboard.php';
        break;

}
