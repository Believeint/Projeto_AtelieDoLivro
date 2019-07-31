<?php

$sql = "SELECT * FROM tbl_cliente ORDER BY nome_cli";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0) {
    print "<div class='container'>";
    print "<p>Encontrei <b>$qtd</b> resultado(s)</p>";
    print "<table class='table'>";
    print "<tr>";
    print "<th scope='col'>#</th>";
    print "<th scope='col'>Nome/R.social</th>";
    print "<th scope='col'>CNPJ/CPF</th>";
    print "<th scope='col'>Inscrição Estadual</th>";
    print "<th scope='col'>Contato</th>";
    print "<th scope='col'>Ações</th>";
    print "</tr>";
    $count = 1;

    while($row = $res->fetch_assoc()) {
        print "<tr>";
        print "<td>" . $count++ . "</td>";
        print "<td>" . $row["nome_cli"] . "</td>";
        print "<td>" . $row["documento_cli"] . "</td>";
        print "<td>" . $row["inscricao_estadual_cli"] . "</td>";
        print "<td>" . $row["telefone_cli"] . "</td>";
        print "<td>
                    <button onclick=\"location.href='index.php?page=edi-cliente&id_cli=" . $row["id_cli"] . "';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('tem certeza que deseja excluir?')){location.href='index.php?page=sal-cliente&acao=excluir&id_cli=" . $row['id_cli'] . "';}else{false;};\" class='btn btn-danger'>Excluir</button>
                    <button class='btn btn-primary' onclick=\"location.href='index.php?page=exi-cliente&id_cli=" . $row["id_cli"] . "';\">Exibir</button>
        </td>";
        print "</div>";
    }
    
}else {
    print "<p>Não encontrei resultados...</p>";
}

?>