<?php

$sql = "SELECT * FROM tbl_cliente WHERE id_cli=" . $_REQUEST['id_cli'];

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
    <th>Contato</th>
    <td><?php print $row['telefone_cli']?></td>
    </tr>
    <tr>
    <th scope="row">Email</th>
    <td><?php print $row['email_cli']?></td>
    </tr>
    <tr>
    <th scope="row">Logradouro</th>
    <td><?php print $row['logradouro_cli']?></td>
    </tr>
    <tr>
    <th>Nº</th>
    <td><?php print $row['n_cli']?></td>
    </tr>
    <tr>
    <th>País</th>
    <td><?php print $row['pais_cli']?></td>
    </tr>
    <tr>
    <th>Complemento</th>
    <td><?php print $row['complemento_cli']?></td>
    </tr>
    <tr>
    <th>UF</th>
    <td><?php print $row['uf_cli']?></td>
    </tr>
    <tr>
    <th>Bairro</th>
    <td><?php print $row['bairro_cli']?></td>
    </tr>
    <tr>
    <th>Municipio</th>
    <td><?php print $row['municipio_cli']?></td>
    </tr>
    <tr>
    <th>Cep</th>
    <td><?php print $row['cep_cli']?></td>
    </tr>

  </tbody>
</table>
</div>