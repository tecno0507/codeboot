<h3><?php echo empty($article->id) ? 'Agregar un nuevo articulo' : 'Editar articulo ' . $article->title; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">
	<tr>
		<td>Fecha de Publicacion</td>
		<td><?php echo form_input('pubdate', set_value('pubdate', $article->pubdate), 'class="datepicker"'); ?></td>
	</tr>
	<tr>
		<td>Titulo</td>
		<td><?php echo form_input('title', set_value('title', $article->title)); ?></td>
	</tr>
	<tr>
		<td>Slug</td>
		<td><?php echo form_input('slug', set_value('slug', $article->slug)); ?></td>
	</tr>
	<tr>
		<td>Contenido</td>
		<td><?php echo form_textarea('body', set_value('body', $article->body), 'class="tinymce"'); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Guardar', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?php echo form_close();?>

<script>
$(function() {
	$('.datepicker').datepicker({ format : 'yyyy-mm-dd' });
});
</script>