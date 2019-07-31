<?php
$nome = $_REQUEST['nome_agenda'];
$contato = $_REQUEST['contato_agenda'];
$email = $_REQUEST['email_agenda'];

switch($_REQUEST['acao'])
{
    case 'cadastrar':
    
    $sql = "INSERT INTO agenda (nome_agenda, contato_agenda, email_agenda) VALUES
                               ('{$nome}', '{$contato}', '{$email}')";
    $res = $conn->query($sql) or die($conn->error);
    
   if($res==true) 
   {
       print '<br><div class="alert alert-success">Cadastrou com Sucesso!</div>';
   } 
   else
   {
       print '<br><div class="alert alert-danger">Não foi possível cadastrar.</div>';
   }
   break;
   case 'editar':

   $sql = "UPDATE agenda SET nome_agenda='{$nome}', contato_agenda='{$contato}', email_agenda='{$email}' WHERE id_agenda=" . $_REQUEST["id_agenda"];

   $res = $conn->query($sql) or die($conn->error);

   if($res == true)
   {
       print "<script>alert('Editou com Sucesso!');</script>";
       print "<script>location.href='index.php?page=lis-agenda';</script>";
   }
   else
   {
    print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
   }
   break;
   case 'excluir':
    $sql = "DELETE FROM agenda WHERE id_agenda=". $_REQUEST['id_agenda'];

    $res = $conn->query($sql) or die($conn->error);
    
    if($res == true) 
    {
        print "<script>alert('Excluiu com sucesso!')</script>";
        print "<script>location.href='index.php?page=lis-agenda';</script>";
    }
    else
    {
        print "<br><div class='alert alert-danger'>Não foi possível cadastrar</div>";
    }
    break;
    

}