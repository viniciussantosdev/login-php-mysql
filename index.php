<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
        body{
            background-color: #F2f2f2;
        }
        .login{
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }
        .container{
            width: 400px;
        }
    </style>
</head>
<body>
<div class = "login">
    <div class="container">
        <div class="row">
            <div class="col-lg-4-offset-lg-4">
                <div class="card">
                    <div class="card-body">
                    <div class="card-body"> 
                            <h3>Acesso Restrito</h3>
                    </div>                       <form action="login.php" method="POST">
                    <div>
                        <div class="mb3">
                            <label>Usuário</label>
                            <input type="text" name ="usuario" class="form-control">
                        </div>
                    </div>
                    <div>
                        <div class="mb3">
                            <label>Senha</label>
                            <input type="password" name ="senha" class="form-control">
                        </div>
                    </div>
                    <div>
                        <div class="mb3">
                            <button type="submit" class="btn btn-primary">Enviar</button>
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