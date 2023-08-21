<h1>Alterar Cliente</h1>
<?php
    $sql = "SELECT * FROM cliente WHERE id_cli=".$_REQUEST["id_cli"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="alterar">
    <input type="hidden" name="id_cli" value="<?php print $row->id_cli; ?>">
    <div class="mb-3">
        <label>Nome do Cliente: </label>
        <input type="text" name="nome_cli" value="<?php print $row->nome_cli; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF do Cliente: </label>
        <input type="text" name="cpf_cli" value="<?php print $row->cpf_cli; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento: </label>
        <input type="date" name="nasc_cli" value="<?php print $row->nasc_cli; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>