<section>
	<h2>Paginas</h2>
	<?php echo anchor('admin/page/edit', '<i class="icon-plus"></i> Agregar una Pagina'); ?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Parent</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
<?php if(count($pages)): foreach($pages as $page): ?>	
		<tr>
			<td><?php echo anchor('admin/page/edit/' . $page->id, $page->title); ?></td>
			<td><?php echo $page->parent_slug; ?></td>
			<td><?php echo btn_edit('admin/page/edit/' . $page->id); ?></td>
			<td><?php echo btn_delete('admin/page/delete/' . $page->id); ?></td>
		</tr>
<?php endforeach; ?>
<?php else: ?>
		<tr>
			<td colspan="3">No encontramos paginas.</td>
		</tr>
<?php endif; ?>	
		</tbody>
	</table>
</section>