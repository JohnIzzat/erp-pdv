<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema - PDV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url("image/image1.webp");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .login {
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }

        .card{
            border: 1px solid black;
            border-radius: 10px;
        }

        .style_h3 {
            align-items: center;
            justify-content: center;
            display: flex;
            font-weight: bold;
            text-shadow: 1px 1px 1px black;
        }

        .style_font {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="style_h3">Sistema PDV</h3>
                        </div>
                        <div class="card-body">
                            <form action="login.php" method="POST">
                                <div>
                                    <div class="mb-3">
                                        <p class="style_font">Usuário</p>
                                        <input type="text" 
                                        name="usuario" 
                                        class="form-control" placeholder="Insira seu Usuário">
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                    <p class="style_font">Senha</p>
                                        <input type="password" 
                                        name="senha" 
                                        class="form-control" placeholder="Insira sua Senha">
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <button type="submit" class="form-control btn btn-primary">Entrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>