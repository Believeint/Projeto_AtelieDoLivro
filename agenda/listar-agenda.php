<?php

$sql = "SELECT * FROM agenda ORDER BY nome_agenda";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0) 
{
    print "<p>Encontrei <b>". $qtd . "</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Contato</th>";
    print "<th>Email</th>";
    print "<th>Ações</th>";
    print "</tr>";
    $count = 1;
    while($row = $res->fetch_assoc()) 
    {
        print "<tr>";
        print "<td>" . $count++ . "</td>";
        print "<td>" . $row['nome_agenda'] . "</td>";
        print "<td>" . $row['contato_agenda'] . "</td>";
        print "<td>" . $row['email_agenda'] . "</td>";
        print "<td><button onclick=\"location.href='index.php?page=edi-agenda&id_agenda=".$row["id_agenda"]."';\" class='btn btn-success'>Editar</button>
        <button onclick=\"if(confirm('tem certeza que deseja excluir?')){location.href='index.php?page=sal-agenda&acao=excluir&id_agenda=".$row["id_agenda"]."';}else{false;};\"  class='btn btn-danger'>Excluir</button>        
               </td>";
        print "</tr>";
    }
}


