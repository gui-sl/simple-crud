<?php

    include_once("conexao.php");

    $sql = "SELECT * FROM tbl_cad ORDER BY id ASC";

    $result = $conexao->query($sql);


    if(!empty($_GET['search'])){
        $data = $_GET['search'];
        echo $data;
        $sql = "DELETE * FROM tbl_cad WHERE id = $data";
        $result = $conexao->query($sql);

    }
    else{
        $sql = "SELECT * FROM tbl_cad ORDER BY id ASC";
        $result = $conexao->query($sql);

    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETAR REGISTROS</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
        }
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        button{
            width: 30px;
            height: 30px;
        }
        input{
            height: 30px;
            width: 300px;
        }
        a{
            position: fixed;
            top: 50px;
            left: 50px;
            color: white;
            background-color: black;
            padding: 20px 10px 20px 10px;
            border-radius: 50%;
            border: 3px solid white;
            transition: ease .5s
        }
        a:hover{
            background-color: transparent;
            border: 3px solid black;
        }
        button{
            color: white;
        }
        i{
            color: white;
        }
    </style>
</head>
<body>
<a href="index.php">Menu</a>
    <form action="delete.php">
        <input type="text" name="" id="">
        <input type="submit" value="submit" name="submit" id="submit">
    </form>

</body>
<script src="delete.js"></script>
</html>