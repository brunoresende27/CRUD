<h1>Novo Cliente</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do Cliente: </label>
        <input type="text" name="nome_cli" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF do Cliente: </label>
        <input type="text" name="cpf_cli" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento: </label>
        <input type="date" name="nasc_cli" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>