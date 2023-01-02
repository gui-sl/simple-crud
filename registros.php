<?php

    include_once("conexao.php");

    $sql = "SELECT * FROM tbl_cad ORDER BY id ASc";

    $result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            text-decoration: none;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            font-family: sans-serif;
            
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            border-radius: 15px;
            width: 50%;
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
    </style>
</head>
<body>
    <a href="index.php">Menu</a>
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
</body>
</html>