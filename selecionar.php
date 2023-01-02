<?php

    include_once("conexao.php");

    $sql = "SELECT * FROM tbl_cad ORDER BY id ASc";

    $result = $conexao->query($sql);


    if(!empty($_GET['search'])){
        $data = $_GET['search'];
        $sql = "SELECT * FROM tbl_cad WHERE id LIKE '%$data%' or Nome LIKE '%$data%' or Sexo LIKE '%$data%'";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Selecionar</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
            font-family: sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));    
        }
        a{
            position: fixed;
            top: 50px;
            left: 50px;
            color: white;
            background-color: black;
            padding: 20px 10px 20px 10px;
            border-radius: 50%;
            border: 2px solid white;
            transition: ease .5s
        }
        a:hover{
            background-color: transparent;
            border: 2px solid black;
        }
        input{
            width: 500px;
            height: 35px;
            margin-right: 5px;
            border-radius: 10px; 
            text-align: center;
            margin-top: 5px
        }
        #search{
            margin-top: 80px;
            margin-bottom: 20px;
        }

        button{
            width: 45px;
            height: 35px;
            background-color: black;
            margin-top: 80px;
            border-radius: 10px;
            cursor: pointer;
            transition: ease .5s
        }

        span{
            color: white;
        }
        button:hover{
            border: 2px solid blue;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            border-radius: 15px;
            width: 500px;
            margin-top: -550px;
        }

        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            background: black;
            color: white;

        }
        td{
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            background: white;
            color: black;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
        .busca{
            margin-top: -150px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 450px;
            flex-wrap: wrap;
        }
        .search{
            width: 100%;
            display: flex;
        }
    </style>
</head>
<body>
    <a href="index.php">Menu</a>
        <div class="busca">
            <div class="search">
                <input type="search" name="search" id="search" placeholder="pesquisar">
                <button onclick="searchData()">
                <img src="https://img.icons8.com/metro/26/FFFFFF/search.png"/></button>
            </div>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>nome</th>
                        <th>Senha</th>
                        <th>Sexo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                        echo "<tr>"; 
                        echo "<td>".$user_data['id']."</td>"; 
                        echo "<td>".$user_data['Nome']."</td>";
                        echo "<td>".$user_data['Senha']."</td>";
                        echo "<td>".$user_data['Sexo']."</td>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <script src="script.js"></script>
</body>
</html>