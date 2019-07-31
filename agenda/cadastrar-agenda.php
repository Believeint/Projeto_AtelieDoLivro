<div class="container">
<h1>Cadastrar Contato</h1>
<form action="index.php?page=sal-agenda" method="post">

    <input type="hidden" name="acao" value="cadastrar" />

    <div class="form-group">

        <label for="nome-agenda">Nome</label>
        <input type="text" name="nome_agenda" class="form-control" placeholder="Nome do Contato"/>

    </div>
    <div class="form-group">

        <label for="nome-agenda">Contato</label>
        <input type="text" name="contato_agenda" class="form-control" placeholder="Telefone do Contato"/>

    </div>
    <div class="form-group">

        <label for="nome-agenda">Email</label>
        <input type="text" name="email_agenda" class="form-control"placeholder="Email do Contato"/>

    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    </div>
</form>