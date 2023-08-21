<h1>Listar Cliente</h1>
<?php
    $sql = "SELECT * FROM cliente";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>Código</th>";
            print "<th>Nome</th>";
            print "<th>Data de Nascimento</th>";
            print "<th>CPF</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_cli."</td>";
            print "<td>".$row->nome_cli."</td>";
            print "<td>".$row->nasc_cli."</td>";
            print "<td>".$row->cpf_cli."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=alterar&id_cli=".$row->id_cli."';\" class='btn btn-success'>Alterar
                    <button onclick=\"if(confirm('Tem cereteza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id_cli=".$row->id_cli."';}else{false;}\" class='btn btn-danger'>Excluir
                   </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não existem registros a serem mostrados</p>";
    }