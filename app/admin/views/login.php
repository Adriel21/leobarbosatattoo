<?php require_once './app/admin/inc/header.php'; ?>

<div class="row">
    <div class="bg-white rounded shadow mt-5 col-12 my-1 py-4">
    <h2 class="text-center fw-light">Acesso à área administrativa</h2>

        <form action="admin-entering" method="POST" id="form-login" name="form-login" class="mx-auto w-75">

				<div class="mb-3">
					<label for="email" class="form-label">E-mail:</label>
					<input class="form-control" type="email" id="email" name="email">
				</div>
				<div class="mb-3">
					<label for="senha" class="form-label">Senha:</label>
					<input class="form-control" type="password" id="senha" name="senha">
				</div>

				<button class="btn btn-primary btn-lg" name="entrar" type="submit">Entrar</button>

			</form>

            </div>
    
    
    </div>    



    <?php require_once './app/admin/inc/footer.php'; ?>
