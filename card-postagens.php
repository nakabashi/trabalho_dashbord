<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Postagem</title>
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
                    <h2><i class="fa-solid fa-plus"></i> Nova Postagem</h2>
                    <p>Preencha os dados abaixo para criar uma nova postagem.</p>
                </div>

                <form action="tabela-postagens.php" method="post">
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" id="titulo" name="titulo" placeholder="Ex: Minha primeira postagem" required>
                    </div>

                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <select id="categoria" name="categoria">
                            <option value="1">Tecnologia</option>
                            <option value="2">Noticias</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="conteudo">Conteudo</label>
                        <textarea id="conteudo" name="conteudo" rows="6" placeholder="Escreva o conteudo da postagem..." style="padding:12px; border:1px solid #cbd5e0; border-radius:6px; resize:vertical;" required></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-save">Publicar Postagem</button>
                        <a href="tabela-postagens.php" class="btn">Cancelar</a>
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>
</html>
