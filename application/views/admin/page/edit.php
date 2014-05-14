<h3><?php echo empty($page->id) ? 'Agregar una nueva pagina' : 'Editar paginas ' . $page->title; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">
	<tr>
		<td>Parent</td>
		<td><?php echo form_dropdown('parent_id', $pages_no_parents, $this->input->post('parent_id') ? $this->input->post('parent_id') : $page->parent_id); ?></td>
	</tr>
	<tr>
		<td>Plantilla</td>
		<td><?php echo form_dropdown('template', array('page' => 'Pagina', 'news_archive' => 'Nuevo archivo', 'homepage' => 'Homepage'), $this->input->post('template') ? $this->input->post('template') : $page->template); ?></td>
	</tr>
	<tr>
		<td>Titulo</td>
		<td><?php echo form_input('title', set_value('title', $page->title)); ?></td>
	</tr>
	<tr>
		<td>Slug</td>
		<td><?php echo form_input('slug', set_value('slug', $page->slug)); ?></td>
	</tr>
	<tr>
		<td>Contenido</td>
		<td><?php echo form_textarea('body', set_value('body', $page->body), 'class="tinymce"'); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Guardar', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?php echo form_close();?>
