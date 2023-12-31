<div class="row">
	<div class="col-md-12 text-right">
		<a href="index.php?controller=cobranza&action=edit" class="btn btn-outline-primary">Crear cobranza</a>
		<hr/>
	</div>
	<?php
	if(count($dataToView["data"])>0){
		foreach($dataToView["data"] as $cobranza){
			?>
			<div class="col-md-3">
				<div class="card-body border border-secondary rounded">
					<h5 class="card-title"><?php echo $cobranza['title']; ?></h5>
					<div class="card-text"><?php echo nl2br($cobranza['content']); ?></div>
					<hr class="mt-1"/>
					<a href="index.php?controller=cobranza&action=edit&id=<?php echo $cobranza['id']; ?>" class="btn btn-primary">Editar</a>
					<a href="index.php?controller=cobranza&action=confirmDelete&id=<?php echo $cobranza['id']; ?>" class="btn btn-danger">Eliminar</a>
				</div>
			</div>
			<?php
		}
	}else{
		?>
		<div class="alert alert-info">
			Actualmente no existen cobranzas.
		</div>
		<?php
	}
	?>
</div>