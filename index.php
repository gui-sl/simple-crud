<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
            font-family: sans-serif;
        }
        body{
            text-align: center;
            display: grid;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));    
        }
        h2{
            color: white;
        }
        div{
            margin-top: 30px;
            display: grid;
            text-align: center;
            width: 300px;
            height: 320px;
            gap: 10px;
            background: black;
            border: 2px solid white;
            border-radius: 10px;
            padding: 10px
        }
        a{
            color: midnightblue;
            padding: 5px 20px 0px 20px;
            background-color: white;
            margin-top: 5px;
            border-radius: 10px;
            border: 2px solid black;
            transition: ease .5s;
            font-weight: bold;
        }
        a:hover{
            color: white;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));    
            border: 2px solid white;
        }
    </style>
</head>
<body>
    <div>
    <h2>MENU</h2>
    <br>
        <a href="cadastro.php">Cadastro</a>
        <a href="selecionar.php">Selecionar</a>
        <a href="registros.php">Registros</a>
        <a href="delete.php">Delete</a>
        <a href="">Atualizar</a>
    </div>
</body>
</html>
