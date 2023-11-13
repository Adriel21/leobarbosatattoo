<?php require_once __DIR__ . '/../inc/headerAdmin.php'; ?>


<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Atualizar Publicação
		</h2>
				
		<form enctype="multipart/form-data" class="mx-auto w-100" action="register-post" method="post" id="form-inserir" name="form-inserir">

            <div class="mb-3">
                <label class="form-label" for="categoria">Categoria:</label>
                <select class="form-select" name="categoria" id="categoria" required>
                <?php foreach($allCategories as $category) { ?>
					<option value="<?=$category['id']?>"><?=$category['name']?></option>
				<?php } ?>
					
				</select>
			</div>

			<div class="mb-3">
                <label class="form-label" for="titulo">Título: (máximo de 75 caracteres):</label>
				<span id="maximoo" class="badge bg-danger">0</span>
                <input class="form-control" required type="text" id="titulo" name="titulo" maxlength="75" value="<?=$onePost['title']?>">
			</div>

			<div class="mb-3">
                <label class="form-label" for="texto" id="">Conteúdo:</label>
                <textarea class="form-control" required name="conteudo" id="trumbowyg-editor" cols="50" rows="50" ><?=$onePost['content']?></textarea>
			</div>

			<div class="mb-3">
                <label class="form-label" for="resumo">Resumo (máximo de 160 caracteres):</label>
                <span id="maximo" class="badge bg-danger">0</span>
                <textarea class="form-control" required name="resumo" id="resumo" cols="50" rows="5" maxlength="160"><?=$onePost['summary']?></textarea> 
			</div>

            <div class="mb-3">
                <label for="imagem-existente" class="form-label">Imagem do Post:</label>
                <!-- campo somente leitura, meramente informativo -->
                <input value="<?=$onePost['cover_photo']?>" class="form-control" type="text" id="imagem-existente" name="imagem-existente" readonly>
            </div>

            <div class="mb-3">
                <label for="imagem" class="form-label">Caso queira mudar, selecione outra imagem:</label>
                <input class="form-control" type="file" id="imagem" name="imagem" accept="image/png, image/jpeg, image/gif, image/svg+xml">
            </div>

			
		
			

			<button class="btn btn-primary" type="submit"><i class="bi bi-save"></i> Inserir</button> 
		</form>
		
	</article>
</div>

<?php require_once __DIR__ . '/../inc/footer.php'; ?>


