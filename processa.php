<?php
    include "conexao.php";

    if(isset($_POST['btnSalvar'])){
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $genero = $_POST['genero'];
        $editora =  $_POST['editora'];
        $quantidade = $_POST['quantidade'];

        $sql = "INSERT INTO livros (codigo,nomeLivro,editora,genero,quantidade) VALUES (?,?,?,?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$codigo, $nome, $genero, $editora, $quantidade]);
        echo "<span style='color:green;font-size:20px;'>Livro Cadastrado com sucesso</span>";
    }
?>