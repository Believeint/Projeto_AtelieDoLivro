<?php

$sql = "SELECT * FROM tbl_tomador_servico WHERE id_ts=" . $_REQUEST['id_ts'];

$res = $conn->query($sql);

$row = $res->fetch_assoc();

?>
<div class="container">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="row" class="text-center" colspan="2">Informações do Cliente</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nome/Razão Social</th>
      <td><?php print $row['nome_ts']?></td>
    </tr>
    <tr>
      <th scope="row">Tipo de Documento</th>
      <td><?php print $row['tipo_documento_ts']?></td>
    </tr>
    <tr>
      <th scope="row">Documento</th>
      <td><?php print $row['documento_ts']?></td>
    </tr>
    <tr>
    <th scope="row">Inscrição Estadual</th>
    <td><?php print $row['inscricao_estadual_ts']?></td>
    </tr>
    <tr>
    <th>Contato</th>
    <td><?php print $row['telefone_ts']?></td>
    </tr>
    <tr>
    <th scope="row">Email</th>
    <td><?php print $row['email_ts']?></td>
    </tr>
    <tr>
    <th scope="row">Logradouro</th>
    <td><?php print $row['logradouro_ts']?></td>
    </tr>
    <tr>
    <th>Nº</th>
    <td><?php print $row['n_ts']?></td>
    </tr>
    <tr>
    <th>País</th>
    <td><?php print $row['pais_ts']?></td>
    </tr>
    <tr>
    <th>Complemento</th>
    <td><?php print $row['complemento_ts']?></td>
    </tr>
    <tr>
    <th>UF</th>
    <td><?php print $row['uf_ts']?></td>
    </tr>
    <tr>
    <th>Bairro</th>
    <td><?php print $row['bairro_ts']?></td>
    </tr>
    <tr>
    <th>Municipio</th>
    <td><?php print $row['municipio_ts']?></td>
    </tr>
    <tr>
    <th>Cep</th>
    <td><?php print $row['cep_ts']?></td>
    </tr>

  </tbody>
</table>
</div>