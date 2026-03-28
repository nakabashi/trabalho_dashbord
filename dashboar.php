<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            <section class="container-cards">
                <article>
                    <h3><i class="fa-solid fa-list"></i> Categorias</h3>
                    <p>Gerencie as categorias do blog.</p>
                    <a href="tabela-categorias.php" class="btn">Acessar</a>
                </article>
                <article>
                    <h3><i class="fa-solid fa-file-pen"></i> Postagens</h3>
                    <p>Gerencie as postagens do blog.</p>
                    <a href="tabela-postagens.php" class="btn">Acessar</a>
                </article>
                <article>
                    <h3><i class="fa-solid fa-users"></i> Usuarios</h3>
                    <p>Gerencie os usuarios do sistema.</p>
                    <a href="tabela.php" class="btn">Acessar</a>
                </article>
            </section>
        </main>
    </div>
    <footer>
        <p> 2026 Trabalho Dashboard </p>
    </footer>
</body>
</html>
