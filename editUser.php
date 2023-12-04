<h1>Editar Usuários</h1>

<?php
    $sql = "SELECT * FROM usuario WHERE id=".$_REQUEST["id"];
    $result = $conn->query($sql);

    $row = $result->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control"
        value="<?php print $row->nome?>">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control"
        value="<?php print $row->email?>">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" value="<?php print $row->senha; ?>">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control"
        value="<?php print $row->data_nasc?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-outline-success">
            Enviar
        </button>
    </div>
</form>