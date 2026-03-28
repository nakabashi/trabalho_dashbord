<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestao de Postagens</title>
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
            <div class="header-content">
                <h2>Gestao de Postagens</h2>
                <p>Visualize e gerencie as postagens do blog.</p>
                <a href="card-postagens.php" class="btn"><i class="fa-solid fa-plus"></i> Adicionar Novo</a>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Categoria</th>
                            <th>Autor</th>
                            <th>Status</th>
                            <th>Acoes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Primeira postagem do blog</td>
                            <td>Tecnologia</td>
                            <td>Eric Freitas</td>
                            <td><span class="badge ativo">Publicado</span></td>
                            <td><button class="btn_icon"><i class="fa-solid fa-pen"></i></button></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Novidades da semana</td>
                            <td>Noticias</td>
                            <td>Ana Souza</td>
                            <td><span class="badge ativo">Publicado</span></td>
                            <td><button class="btn_icon"><i class="fa-solid fa-pen"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
