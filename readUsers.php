<h1>Listar Usuários</h1>
<?php

    $sql = "SELECT * FROM usuario";

    $result = $conn->query($sql);

    $qtd = $result->num_rows;

    if ($qtd > 0) 
    {
        print "<table class='table table-hover table-striped table-bordered '>";

        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $result->fetch_object())
        {
            print "<tr>";
            print "<td>". $row->id."</td>";
            print "<td>". $row->nome."</td>";
            print "<td>". $row->email."</td>";
            print "<td>". $row->data_nasc."</td>";
            print "<td>
                <button onClick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-outline-primary'>Editar</button>
                <button onClick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-outline-danger'>Excluir</button>
            </td>";
            print "</tr>";
        }

        print "</table>";
    }
    else 
    {
        print "<p class='alert alert-danger'>Não foram encontrados usuários</p>";
    }


?>