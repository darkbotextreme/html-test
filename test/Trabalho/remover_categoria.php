<?php
    $id = $_GET['id'];
    
    $conexao = new PDO('sqlite:dw.db');

    $query = "DELETE FROM categoria WHERE id = $id";
    $conexao->exec($query);

    header("Location:categoria.php");