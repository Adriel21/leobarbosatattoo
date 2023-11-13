<?php require_once './app/admin/inc/headerAdmin.php'; ?>


<article class="p-5 my-4 rounded-3 bg-white shadow">
    <div class="container-fluid py-1">        
        <h2 class="display-4">Olá <?=$_SESSION['name']?>!</h2>

        <?php if( isset($_GET['perfil-atualizado']) ){ ?>
            <p class="alert alert-primary">
                Dados atualizados com sucesso!
            </p>
        <?php } ?>

        <p class="fs-5">Você está no <b>painel de controle e administração</b> do
		seu blog.</p>
        <hr class="my-4">

        <div class="d-grid gap-2 d-md-block text-center">
            <a class="btn btn-dark bg-gradient btn-lg" href="meu-perfil.php">
                <i class="bi bi-person"></i> <br>
                Meu perfil
            </a>
			<a class="btn btn-dark bg-gradient btn-lg" href="categorias.php">
                <i class="bi bi-tags"></i> <br>
                Categorias
            </a>
			<a class="btn btn-dark bg-gradient btn-lg" href="usuarios.php">
                <i class="bi bi-people"></i> <br>
                Usuários
            </a>

            <a class="btn btn-dark bg-gradient btn-lg" href="noticias.php">
                <i class="bi bi-newspaper"></i> <br>
                Publicações
            </a>
        </div>
    </div>
</article>


<?php require_once './app/admin/inc/footer.php'; ?>
