<?php
    $id = $_GET['id'];
    
    $conexao = new PDO('sqlite:dw.db');

    $query = "DELETE FROM produto WHERE id = $id";
    $conexao->exec($query);

    header("Location:produto.php");