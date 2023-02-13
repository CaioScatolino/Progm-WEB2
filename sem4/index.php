<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana 4 - PWII</title>
    <style>
        * {
            margin: 0;
        }

        .container {
            background-color: gray;
            width: 100vw;
            height: 95vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .formulario {
            background-color: white;
            width: 200px;
            padding: 20px;
            text-align: center;
        }

        header {
            height: 5vh;
            text-align: center;
            background-color: lightgray;
        }
    </style>

</head>

<body>
    <header>
        <h1>Semana 4 - PWII</h1>
    </header>
    <div class="container">
        <div class="formulario">
            <form action="processa_dados.php" method="post">

                <label for="nome">
                    <h4>Nome</h4>
                    <input type="text" name="nome" id="nome" placeholder="Insira seu nome">
                </label> <br><br>

                <label for="cidade">
                    <h4>Cidade</h4>
                    <input type="text" name="cidade" id="cidade" placeholder="Insira sua cidade atual">
                </label><br><br>

                <label for="telefone">
                    <h4>Telefone</h4>
                    <input type="number" name="telefone" id="telefone" placeholder="Insira seu telefone">
                </label><br><br>

                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>

</html>