<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Livro</title>
        <style>
            body {
                font-family: Arial;
            }
            .container {
                width: 300px;
            }
            form {
                display: flex;
                flex-direction: column;
            }
            input[type="submit"] {
                margin-top: 10px;
                padding: 10px;
                background-color: #007bff;
                color: white;
            }

        </style>
    </head>
    <body>
        <div>
            <h1>Cadastro de Livro<h1>

            <form method="post" action="">
                <label for="titulo">Titulo: </label>
                <input type="text" id="titulo" required>

                <label for="autor">Autor: </label>
                <input type="text" id="autor" required>

                <label for="ano">Ano: </label>
                <input type="text" id="ano" required>

                <input type="submit"value="cadastrar">
            </form>
        </div>
    </body>
</html>