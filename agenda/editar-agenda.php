<h1>Editar Contato</h1>
<?php

$sql = "SELECT * FROM agenda WHERE id_agenda=" . $_REQUEST["id_agenda"];

$res = $conn->query($sql);

$row = $res->fetch_assoc();

?>

<form action="index.php?page=sal-agenda" method="post">
<input type="hidden" name="acao" value="editar">
<input type="hidden" name="id_agenda" value="<?php print $row['id_agenda'] ?>">

<div class="form-group">
    <label>Nome</label>
    <input type="text" name="nome_agenda" value="<?php print $row['nome_agenda']; ?>" class="form-control">
</div>

<div class="form-group">
    <label>Contato</label>
    <input type="text" name="contato_agenda" value="<?php print $row['contato_agenda']; ?>" class="form-control">
</div>

<div class="form-group">
    <label>Email</label>
    <input type="text" name="email_agenda" value="<?php print $row['email_agenda']; ?>" class="form-control">
</div>

<button type="submit" class="btn btn-primary">Atualizar</button>

</form>