<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <div class="card-form" style="margin: 100px auto;">
            <div class="form-header">
                <h2><i class="fa-solid fa-newspaper"></i> Painel do Blog</h2>
                <p>Faça seu login para acessar o painel.</p>
            </div>

            <form action="dashboar.php" method="POST">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>

                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-save" style="width:100%;">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
