<?php

$sql = "SELECT * FROM tbl_tomador_servico ORDER BY nome_ts";

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
        print "<td>" . $row["nome_ts"] . "</td>";
        print "<td>" . $row["documento_ts"] . "</td>";
        print "<td>" . $row["inscricao_estadual_ts"] . "</td>";
        print "<td>" . $row["telefone_ts"] . "</td>";
        print "<td>
                    <button onclick=\"location.href='index.php?page=edi-ts&id_ts=" . $row["id_ts"] . "';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('tem certeza que deseja excluir?')){location.href='index.php?page=sal-ts&acao=excluir&id_ts=" . $row['id_ts'] . "';}else{false;};\" class='btn btn-danger'>Excluir</button>
                    <button class='btn btn-primary' onclick=\"location.href='index.php?page=exi-ts&id_ts=" . $row["id_ts"] . "';\">Exibir</button>
        </td>";
        print "</div>";
    }
    
}else {
    print "<p>Não encontrei resultados...</p>";
}

?>