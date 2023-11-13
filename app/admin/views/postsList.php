<?php require_once __DIR__ . '/../inc/headerAdmin.php'; ?>

<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Posts <span class="badge bg-dark"><?=count($data['posts'])?></span>
		</h2>

		<p class="text-center mt-5">
			<a class="btn btn-primary" href="noticia-insere.php">
			<i class="bi bi-plus-circle"></i>	
			Inserir novo Post</a>
		</p>
				
		<div class="table-responsive">
		
			<table class="table table-hover">
				<thead class="table-light">
					<tr>
                        <th>Título</th>
                        <th>Data</th>
						<th>Autor</th> 
						<th class="text-center" colspan="2">Operações</th>
					</tr>
				</thead>

				<tbody>
                <?php foreach($data['posts'] as $posts) { ?>
					<tr>
                        <td><?=$posts['title']?></td>
                        <td><?=$posts['date']?></td>

                        <td>Leonardo Barbosa</td>

						<td class="text-center">
							<a class="btn btn-warning" 
							href="update-post?id=<?=$posts['id']?>">
							<i class="bi bi-pencil"></i> Atualizar
							</a>
						</td>
						<td>
							<a class="btn btn-danger excluir" 
							href="delete-post?id=<?=$posts['id']?>">
							<i class="bi bi-trash"></i> Excluir
							</a>
						</td>
					</tr>
                <?php } ?>
				</tbody>                
			</table>
	</div>
		
	</article>
</div>

<?php require_once __DIR__ . '/../inc/footer.php'; ?>
