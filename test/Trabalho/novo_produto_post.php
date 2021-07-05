<?php
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $imagem = $_POST['imagem'];
    $estoque = $_POST['estoque'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];

    $conexao = new PDO('sqlite:dw.db');
    $query = "INSERT INTO produto (nome, preco, imagem, estoque, categoria, descricao) 
    VALUES ('$nome','$preco', '$imagem', '$estoque', '$categoria', '$descricao')";
    $conexao->exec($query);
    
    /* $stp = $conexao->prepare($query);
    $stp->bindParam(':nome', $nome);
    $stp->bindParam(':preco', $preco);
    $stp->bindParam(':descricao', $descricao);
    
    $stp->execute();
    */
    header('Location: produto.php');