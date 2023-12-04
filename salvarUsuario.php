<?php
    switch ($_REQUEST["acao"])
    {
        case "cadastrar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuario (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conn->query($sql);

            if($res==true)
            {
                print"<script>alert('Cadastro realizado com sucesso!');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            else
            {
                print"<script>alert('Não foi possível realizar o cadastro');</script>";
                print"<script>location.href='?page=listar';</script>";
            }

        break;
        case "editar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuario SET 
                nome='{$nome}', 
                email='{$email}', 
                senha='{$senha}', 
                data_nasc='{$data_nasc}'
                WHERE 
                id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true)
            {
                print"<script>alert('Edição realizada com sucesso!');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            else
            {
                print"<script>alert('Não foi possível editar');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
        break;
        case "excluir":
            $sql = "DELETE FROM usuario WHERE id=".$_REQUEST["id"];
            $result = $conn->query($sql);
        
            if($result==true)
            {
                print"<script>alert('Registro excluido com sucesso!');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            else
            {
                print"<script>alert('Não foi possível excluir');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
        break;
    }
?>