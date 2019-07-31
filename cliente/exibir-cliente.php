<?php

$sql = "SELECT * FROM tbl_cliente WHERE id_cli=" . $_REQUEST['id_cli'];

$res = $conn->query($sql);

$row = $res->fetch_assoc();

?>
<div class="container">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col" class="text-center">Informações do Cliente</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nome/Razão Social</th>
      <td><?php print $row['nome_cli']?></td>
    </tr>
    <tr>
      <th scope="row">Tipo de Documento</th>
      <td><?php print $row['tipo_documento_cli']?></td>
    </tr>
    <tr>
      <th scope="row">Documento</th>
      <td><?php print $row['documento_cli']?></td>
    </tr>
    <tr>
    <th scope="row">Inscrição Estadual</th>
    <td><?php print $row['inscricao_estadual_cli']?></td>
    </tr>
    <tr>
    <th scope="row">Email</th>
    <td><?php print $row['email_cli']?></td>
    </tr>
    <tr>
    <th scope="row">Logradouro</th>
    <td><?php print $row['logradouro_cli']?></td>
    </tr>

  </tbody>
</table>
</div>