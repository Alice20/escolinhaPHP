<?php

if (isset($_POST['btn'])) {

    require_once 'dbconfig.php';

    /** Conexão com o banco de dados */
    try {
        $conn = new PDO("mysql:host=$servername;dbname=escolinha", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


    /*     * Recepçao de dados */

    echo "<h1> $_POST[email] </h1>";
} else {
    //Botão cadastrar nao foi pressionado
    //Redicionar para a pagina inicial
    header('Location: index.php');
} 