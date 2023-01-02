<?php 

    if(isset($_POST['submit']))
    {

        include_once("conexao.php");

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $sexo = $_POST['genero'];

        $result = mysqli_query($conexao, "INSERT INTO tbl_cad(Nome,Senha,Sexo) VALUES ('$nome','$senha','$sexo')");

        header ("Location: registros.php");

    }


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 25%;
            min-width: 300px;
            height: 53%;
        }
        fieldset{
            border: 3px solid black;
            border-radius: 15px;
        }
        legend{
            border: 3px solid black;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid black;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit, #reset{
            background-color: dodgerblue;
            width: 49%;
            border: none;
            padding: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            transition: ease .5s;
            border: 3px solid black;
        }
        #submit:hover, #reset:hover{
            background-color: black;
            border: 3px solid dodgerblue;
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
    </style>
</head>
<body>
<a href="index.php">Menu</a>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <input type="reset" id="reset" value="Limpar"></input>
            </fieldset>
        </form>
    </div>
</body>
</html>

