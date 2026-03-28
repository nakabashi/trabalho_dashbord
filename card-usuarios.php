<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuario</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <nav>
            <h2>Painel do Blog</h2>
            <ul>
                <li><a href="dashboar.php"><i class="fa-solid fa-house"></i> Inicio</a></li>
                <li><a href="tabela-categorias.php"><i class="fa-solid fa-list"></i> Categorias</a></li>
                <li><a href="tabela-postagens.php"><i class="fa-solid fa-file-pen"></i> Postagens</a></li>
                <li><a href="tabela.php"><i class="fa-solid fa-users"></i> Usuarios</a></li>
            </ul>
            <div class="user-profile">
                <p><strong>Diego</strong></p>
                <small>Administrador</small>
            </div>
        </nav>
        <main>
            <section class="card-form">
                <div class="form-header">
                    <h2><i class="fa-solid fa-user-plus"></i> Novo Usuario</h2>
                    <p>Preencha os dados abaixo para registrar um novo acesso.</p>
                </div>

                <form action="tabela.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" name="nome" placeholder="Ex: Eric Freitas" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="nome@empresa.com" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group flex-1">
                            <label for="nivel">Nivel</label>
                            <select id="nivel" name="nivel">
                                <option value="1">Usuario</option>
                                <option value="2">Administrador</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-save">Finalizar Cadastro</button>
                        <a href="tabela.php" class="btn">Cancelar</a>
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>
</html>
